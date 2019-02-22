<?php declare(strict_types=1);

namespace WyriMaps\BattleNet;

use ApiClients\Foundation\Client;
use ApiClients\Foundation\ClientInterface;
use ApiClients\Foundation\Factory;
use ApiClients\Foundation\Resource\ResourceInterface;
use React\EventLoop\LoopInterface;
use React\Promise\CancellablePromiseInterface;
use React\Promise\PromiseInterface;
use Rx\Scheduler;
use WyriMaps\BattleNet\CommandBus\Command\WhoAmICommand;
use WyriMaps\BattleNet\WorldOfWarcraft\AsyncClient as WowClient;
use WyriMaps\BattleNet\WorldOfWarcraft\AsyncClientInterface as WowClientInterface;

final class AsyncClient implements AsyncClientInterface
{
    /**
     * @var Client
     */
    private $client;

    /** @var AuthenticationInterface */
    private $auth;

    /** @var array */
    private $options;

    /**
     * AsyncClient constructor.
     * @param Client                  $client
     * @param AuthenticationInterface $auth
     * @param array                   $options
     */
    public function __construct(Client $client, AuthenticationInterface $auth, array $options)
    {
        $this->client = $client;
        $this->auth = $auth;
        $this->options = $options;
    }

    /**
     * @param  LoopInterface           $loop
     * @param  AuthenticationInterface $auth
     * @param  array                   $passedOptions
     * @param  string                  $region
     * @return AsyncClient
     */
    public static function create(
        LoopInterface $loop,
        AuthenticationInterface $auth,
        array $passedOptions = [],
        string $region = Region::DEFAULT
    ): self {
        $options = ApiSettings::getOptions($auth, $region, $passedOptions, 'Async');
        $client = Factory::create($loop, $options);

        try {
            Scheduler::setAsyncFactory(function () use ($loop) {
                return new Scheduler\EventLoopScheduler($loop);
            });
        } catch (\Throwable $t) {
        }

        return self::createFromClient($client, $auth, $passedOptions);
    }

    /**
     * @internal
     * @param  ClientInterface $client
     * @return AsyncClient
     */
    public static function createFromClient(ClientInterface $client, AuthenticationInterface $auth, array $options): self
    {
        return new self($client, $auth, $options);
    }

    public function hydrate(string $resource): CancellablePromiseInterface
    {
        return $this->client->hydrate($resource);
    }

    public function extract(ResourceInterface $resource): CancellablePromiseInterface
    {
        return $this->client->extract($resource);
    }

    public function withRegion(string $region): AsyncClientInterface
    {
        $passedOptions = ApiSettings::getOptions($this->auth, $region, $this->options, 'Async');
        $client = Factory::create($this->client->getFromContainer(LoopInterface::class), $passedOptions);

        return self::createFromClient($client, $this->auth, $this->options);
    }

    /**
     * @return WowClient
     */
    public function worldOfWarcraft(): WowClientInterface
    {
        return new WowClient($this->client);
    }

    public function whoAmI(string $token): PromiseInterface
    {
        return $this->client->handle(
            new WhoAmICommand($token)
        );
    }
}
