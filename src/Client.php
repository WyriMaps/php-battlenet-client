<?php
declare(strict_types=1);

namespace WyriMaps\BattleNet;

use ApiClients\Foundation\Factory;
use function Clue\React\Block\await;
use React\EventLoop\Factory as EventLoopFactory;
use WyriMaps\BattleNet\Resource\BattleTagInterface;
use WyriMaps\BattleNet\WorldOfWarcraft\Client as WowClient;

class Client
{
    protected $loop;

    protected $client;

    public function __construct(string $apiKey)
    {
        $this->loop = EventLoopFactory::create();
        $options = ApiSettings::getOptions($apiKey, 'Sync');
        $client = Factory::create($this->loop, $options);
        $this->client = new AsyncClient($apiKey, $this->loop, $client);
    }

    public function worldOfWarcraft(): WowClient
    {
        return new WowClient($this->loop, $this->client->worldOfWarcraft());
    }

    /**
     * @throws \Exception
     * @return BattleTagInterface
     */
    public function whoAmI(): BattleTagInterface
    {
        return await(
            $this->client->whoAmI(),
            $this->loop
        );
    }
}
