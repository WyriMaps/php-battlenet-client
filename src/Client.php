<?php
declare(strict_types=1);

namespace WyriMaps\BattleNet;

use ApiClients\Foundation\Factory;
use ApiClients\Foundation\Resource\ResourceInterface;
use function Clue\React\Block\await;
use React\EventLoop\Factory as EventLoopFactory;
use React\EventLoop\LoopInterface;
use Rx\Scheduler;
use WyriMaps\BattleNet\Resource\BattleTagInterface;
use WyriMaps\BattleNet\WorldOfWarcraft\Client as WowClient;

final class Client
{
    /** @var LoopInterface */
    protected $loop;

    /**
     * @var AsyncClient
     */
    private $asyncClient;

    /**
     * @param LoopInterface $loop
     * @param AsyncClient   $client
     */
    private function __construct(LoopInterface $loop, AsyncClient $client)
    {
        $this->loop = $loop;
        $this->asyncClient = $client;
    }

    /**
     * @param  AuthenticationInterface $auth
     * @param  array                   $options
     * @return Client
     */
    public static function create(
        AuthenticationInterface $auth,
        array $options = []
    ): self {
        $loop = EventLoopFactory::create();
        $options = ApiSettings::getOptions($auth, $options, 'Sync');
        $client = Factory::create($loop, $options);

        try {
            Scheduler::setAsyncFactory(function () use ($loop) {
                return new Scheduler\EventLoopScheduler($loop);
            });
        } catch (\Throwable $t) {
        }

        $asyncClient = AsyncClient::createFromClient($client);

        return new self($loop, $asyncClient);
    }

    public function hydrate(string $resource): ResourceInterface
    {
        return await(
            $this->asyncClient->hydrate($resource),
            $this->loop
        );
    }

    public function extract(ResourceInterface $resource): string
    {
        return await(
            $this->asyncClient->extract($resource),
            $this->loop
        );
    }

    public function worldOfWarcraft(): WowClient
    {
        return new WowClient($this->loop, $this->asyncClient->worldOfWarcraft());
    }

    /**
     * @throws \Exception
     * @return BattleTagInterface
     */
    public function whoAmI(): BattleTagInterface
    {
        return await(
            $this->asyncClient->whoAmI(),
            $this->loop
        );
    }
}
