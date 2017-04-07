<?php

use WyriMaps\BattleNet\Client;

require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor/autoload.php';

$client = new Client(require 'resolve_apikey.php');

foreach ($client->worldOfWarcraft()->battleGroups() as $battlegroup) {
    echo $battlegroup->name(), PHP_EOL;
}
