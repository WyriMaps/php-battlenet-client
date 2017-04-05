<?php

use React\EventLoop\Factory;
use Rx\Observer\CallbackObserver;
use WyriMaps\BattleNet\AsyncClient;
use WyriMaps\BattleNet\Resource\WorldOfWarcraft\BattleGroupInterface;
use WyriMaps\BattleNet\Resource\WorldOfWarcraft\BossInterface;

require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor/autoload.php';

$loop = Factory::create();
$client = new AsyncClient(require 'resolve_apikey.php', $loop);

$client->worldOfWarcraft()->bosses()->subscribe(function (BossInterface $boss) {
    echo $boss->name(), PHP_EOL;
}, function ($e) {
    echo (string)$e;
});

$loop->run();
