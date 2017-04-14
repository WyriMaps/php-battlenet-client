<?php

use function ApiClients\Foundation\resource_pretty_print;
use React\EventLoop\Factory;
use Rx\Observer\CallbackObserver;
use WyriMaps\BattleNet\AsyncClient;
use WyriMaps\BattleNet\Resource\WorldOfWarcraft\MountInterface;

require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor/autoload.php';

$loop = Factory::create();
$client = new AsyncClient(require 'resolve_apikey.php', $loop);

$client->worldOfWarcraft()->mounts()->subscribe(function (MountInterface $mount) {
    resource_pretty_print($mount);
}, function ($e) {
    echo (string)$e;
});

$loop->run();
