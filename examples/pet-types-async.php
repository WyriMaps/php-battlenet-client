<?php

use React\EventLoop\Factory;
use WyriMaps\BattleNet\AsyncClient;
use WyriMaps\BattleNet\Resource\WorldOfWarcraft\PetTypeInterface;

require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor/autoload.php';

$loop = Factory::create();
$client = new AsyncClient(require 'resolve_apikey.php', $loop);

$client->worldOfWarcraft()->petTypes()->subscribe(function (PetTypeInterface $petType) {
    echo $petType->name(), PHP_EOL;
}, function ($e) {
    echo (string)$e;
});

$loop->run();
