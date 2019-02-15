<?php declare(strict_types=1);
use function ApiClients\Foundation\resource_pretty_print;
use React\EventLoop\Factory;
use WyriMaps\BattleNet\AsyncClient;
use WyriMaps\BattleNet\Resource\WorldOfWarcraft\ZoneInterface;

require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor/autoload.php';

$loop = Factory::create();
$client = require 'create_client-async.php';

$client->worldOfWarcraft()->zones()->subscribe(function (ZoneInterface $zone) {
    resource_pretty_print($zone);
}, function ($e) {
    echo (string)$e;
});

$loop->run();
