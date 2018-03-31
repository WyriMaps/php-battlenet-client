<?php declare(strict_types=1);
use React\EventLoop\Factory;
use WyriMaps\BattleNet\AsyncClient;
use WyriMaps\BattleNet\Resource\WorldOfWarcraft\PetInterface;
use function ApiClients\Foundation\resource_pretty_print;

require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor/autoload.php';

$loop = Factory::create();
$client = new AsyncClient(require 'resolve_apikey.php', $loop);

$client->worldOfWarcraft()->pets()->subscribe(function (PetInterface $pet) {
    resource_pretty_print($pet);
}, function ($e) {
    echo (string)$e;
});

$loop->run();
