<?php

use function ApiClients\Foundation\resource_pretty_print;
use React\EventLoop\Factory;
use Rx\Observer\CallbackObserver;
use WyriMaps\BattleNet\AsyncClient;
use WyriMaps\BattleNet\Resource\WorldOfWarcraft\BattleGroupInterface;

require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor/autoload.php';

$loop = Factory::create();
$client = new AsyncClient(require 'resolve_apikey.php', $loop);

$client->worldOfWarcraft()->battleGroups()->subscribe(function (BattleGroupInterface $battlegroup) {
    resource_pretty_print($battlegroup);
}, function ($e) {
    echo (string)$e;
});

$loop->run();