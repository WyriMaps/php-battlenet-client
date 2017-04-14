<?php

use function ApiClients\Foundation\resource_pretty_print;
use WyriMaps\BattleNet\Client;

require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor/autoload.php';

$client = new Client(require 'resolve_apikey.php');

foreach ($client->worldOfWarcraft()->pets() as $pet) {
    resource_pretty_print($pet);
}