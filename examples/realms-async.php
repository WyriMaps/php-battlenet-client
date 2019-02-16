<?php declare(strict_types=1);
use function ApiClients\Foundation\resource_pretty_print;
use React\EventLoop\Factory;
use WyriMaps\BattleNet\Resource\WorldOfWarcraft\RealmInterface;

require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor/autoload.php';

$loop = Factory::create();
$client = require 'create_client-async.php';

$client->worldOfWarcraft()->realms()->subscribe(function (RealmInterface $realm) {
    resource_pretty_print($realm);
}, function ($e) {
    echo (string)$e;
});

$loop->run();
