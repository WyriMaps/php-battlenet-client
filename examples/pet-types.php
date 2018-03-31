<?php declare(strict_types=1);
use WyriMaps\BattleNet\Client;
use function ApiClients\Foundation\resource_pretty_print;

require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor/autoload.php';

$client = new Client(require 'resolve_apikey.php');

foreach ($client->worldOfWarcraft()->petTypes() as $petType) {
    resource_pretty_print($petType);
}
