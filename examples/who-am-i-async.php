<?php declare(strict_types=1);
use function ApiClients\Foundation\resource_pretty_print;
use React\EventLoop\Factory;
use WyriMaps\BattleNet\AsyncClient;
use WyriMaps\BattleNet\Resource\BattleTagInterface;

require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor/autoload.php';

$loop = Factory::create();
$client = require 'create_client.php';

$client->whoAmI(require 'resolve_accesstoken.php')->done(function (BattleTagInterface $battleTag) {
    resource_pretty_print($battleTag);
}, function ($e) {
    echo (string)$e;
});

$loop->run();
