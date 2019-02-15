<?php declare(strict_types=1);
use function ApiClients\Foundation\resource_pretty_print;
use React\EventLoop\Factory;
use WyriMaps\BattleNet\AsyncClient;
use WyriMaps\BattleNet\Resource\WorldOfWarcraft\BattleGroupInterface;

require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor/autoload.php';

$loop = Factory::create();
$client = require 'create_client.php';

$client->worldOfWarcraft()->battleGroups()->subscribe(function (BattleGroupInterface $battlegroup) {
    resource_pretty_print($battlegroup);
}, function ($e) {
    echo (string)$e;
});

$loop->run();
