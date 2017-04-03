<?php
declare(strict_types=1);

namespace WyriMaps\BattleNet;

use React\EventLoop\LoopInterface;
use ApiClients\Foundation\Factory;
use ApiClients\Foundation\Transport\Client;
use WyriMaps\BattleNet\WorldOfWarcraft\AsyncClient as WowClient;
use function React\Promise\resolve;

final class AsyncClient
{
    protected $transport;

    public function __construct(string $apiKey, LoopInterface $loop, Client $client = null)
    {
        if (!($client instanceof Client)) {
            $this->options = ApiSettings::getOptions($apiKey, 'Async');
            $client = Factory::create($loop, $this->options);
        }
        $this->client = $client;
    }

    public function worldOfWarcraft()
    {
        return new WowClient($this->client);
    }
}
