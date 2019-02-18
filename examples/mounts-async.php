<?php declare(strict_types=1);
use function ApiClients\Foundation\resource_pretty_print;
use React\EventLoop\Factory;
use WyriMaps\BattleNet\AsyncClientInterface;
use WyriMaps\BattleNet\Region;
use WyriMaps\BattleNet\Resource\WorldOfWarcraft\MountInterface;

require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor/autoload.php';

$loop = Factory::create();
/** @var AsyncClientInterface $client */
$client = (require 'create_client-async.php')->withRegion(Region::US);
$client->worldOfWarcraft()->mounts()->subscribe(function (MountInterface $mount) {
    resource_pretty_print($mount);
}, function ($e) {
    echo (string)$e;
});

$loop->run();
