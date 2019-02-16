<?php declare(strict_types=1);
use function ApiClients\Foundation\resource_pretty_print;
use React\EventLoop\Factory;

require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor/autoload.php';

$loop = Factory::create();
$client = require 'create_client-async.php';
$client->worldOfWarcraft()->item($argv[1] ?? 163042)->then(function ($item) {
    resource_pretty_print($item);
}, function ($e) {
    echo (string)$e;
});

$loop->run();
