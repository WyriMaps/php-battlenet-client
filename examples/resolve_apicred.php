<?php declare(strict_types=1);

$apiCredFile = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'apicred.php';

if (!file_exists($apiCredFile)) {
    echo 'No config file found, copy apicred.sample.php to apicred.php and add your Battle.net API key.', PHP_EOL;
    exit(1);
}

return require $apiCredFile;
