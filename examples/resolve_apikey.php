<?php declare(strict_types=1);

$apikeyFile = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'apikey.php';

if (!file_exists($apikeyFile)) {
    echo 'No config file found, copy apikey.sample.php to apikey.php and add your Battle.net API key.', PHP_EOL;
    exit(1);
}

return require $apikeyFile;
