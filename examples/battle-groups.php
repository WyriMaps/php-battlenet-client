<?php declare(strict_types=1);
use WyriMaps\BattleNet\Client;
use function ApiClients\Foundation\resource_pretty_print;

require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor/autoload.php';

$client = new Client(require 'resolve_apikey.php');

foreach ($client->worldOfWarcraft()->battleGroups() as $battlegroup) {
    resource_pretty_print($battlegroup);
}
