<?php

use React\EventLoop\Factory;
use Rx\Observer\CallbackObserver;
use WyriMaps\BattleNet\AsyncClient;
use WyriMaps\BattleNet\Resource\WorldOfWarcraft\PetInterface;

require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor/autoload.php';

$loop = Factory::create();
$client = new AsyncClient(require 'resolve_apikey.php', $loop);

$client->worldOfWarcraft()->pets()->subscribe(function (PetInterface $pet) {
    echo $pet->name(), PHP_EOL;
}, function ($e) {
    echo (string)$e;
});

$loop->run();
