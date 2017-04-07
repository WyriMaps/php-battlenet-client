<?php

use WyriMaps\BattleNet\Client;

require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor/autoload.php';

$client = new Client(require 'resolve_apikey.php');

foreach ($client->worldOfWarcraft()->mounts() as $mount) {
    echo $mount->name(), PHP_EOL;
}
