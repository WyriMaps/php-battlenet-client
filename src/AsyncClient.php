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

final class AsyncClient implements AsyncClientInterface
{
    /**
     * @var Client
     */
    private $client;

    /**
     * @param ClientInterface $client
     */
    private function __construct(ClientInterface $client)
    {
        $this->client = $client;
    }

    /**
     * @param  LoopInterface           $loop
     * @param  AuthenticationInterface $auth
     * @param  array                   $options
     * @return AsyncClient
     */
    public static function create(
        LoopInterface $loop,
        AuthenticationInterface $auth,
        array $options = []
    ): self {
        $options = ApiSettings::getOptions($auth, $options, 'Async');
        $client = Factory::create($loop, $options);

        try {
            Scheduler::setAsyncFactory(function () use ($loop) {
                return new Scheduler\EventLoopScheduler($loop);
            });
        } catch (\Throwable $t) {
        }

        return self::createFromClient($client);
    }

    /**
     * @internal
     * @param  ClientInterface $client
     * @return AsyncClient
     */
    public static function createFromClient(ClientInterface $client): self
    {
        return new self($client);
    }

    public function hydrate(string $resource): CancellablePromiseInterface
    {
        return $this->client->hydrate($resource);
    }

    public function extract(ResourceInterface $resource): CancellablePromiseInterface
    {
        return $this->client->extract($resource);
    }

    /**
     * @return WowClient
     */
    public function worldOfWarcraft(): WowClient
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
