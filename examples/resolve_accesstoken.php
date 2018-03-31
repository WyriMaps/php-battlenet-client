<?php declare(strict_types=1);

$apikeyFile = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'accesstoken.php';

if (!file_exists($apikeyFile)) {
    echo 'No config file found, copy accesstoken.sample.php to accesstoken.php and add an Oauth access token.', PHP_EOL;
    exit(1);
}

return require $apikeyFile;
