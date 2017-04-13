<?php declare(strict_types=1);

namespace WyriMaps\BattleNet;

use ApiClients\Foundation\Client;
use ApiClients\Foundation\Factory;
use React\EventLoop\LoopInterface;
use WyriMaps\BattleNet\WorldOfWarcraft\AsyncClient as WowClient;

final class AsyncClient
{
    /**
     * @var Client
     */
    private $client;

    /**
     * @param string $apiKey
     * @param LoopInterface $loop
     * @param Client $client
     */
    public function __construct(string $apiKey, LoopInterface $loop, Client $client = null)
    {
        if (!($client instanceof Client)) {
            $options = ApiSettings::getOptions($apiKey, 'Async');
            $client = Factory::create($loop, $options);
        }

        $this->client = $client;
    }

    /**
     * @return WowClient
     */
    public function worldOfWarcraft(): WowClient
    {
        return new WowClient($this->client);
    }
}
