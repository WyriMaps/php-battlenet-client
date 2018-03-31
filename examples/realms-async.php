<?php declare(strict_types=1);
use React\EventLoop\Factory;
use WyriMaps\BattleNet\AsyncClient;
use WyriMaps\BattleNet\Resource\WorldOfWarcraft\RealmInterface;
use function ApiClients\Foundation\resource_pretty_print;

require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor/autoload.php';

$loop = Factory::create();
$client = new AsyncClient(require 'resolve_apikey.php', $loop);

$client->worldOfWarcraft()->realms()->subscribe(function (RealmInterface $realm) {
    resource_pretty_print($realm);
}, function ($e) {
    echo (string)$e;
});

$loop->run();
