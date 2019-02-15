<?php declare(strict_types=1);

use ApiClients\Foundation\Options as FoundationOptions;
use ApiClients\Foundation\Transport\Options as TransportOptions;
use WyriMaps\BattleNet\AsyncClient;
use WyriMaps\BattleNet\Middleware\ClientCredentialsMiddleware;
use WyriMaps\BattleNet\Options;

return AsyncClient::create(
    $loop,
    require 'resolve_apicred.php',
    [
        FoundationOptions::TRANSPORT_OPTIONS => [
            TransportOptions::MIDDLEWARE => [
                ClientCredentialsMiddleware::class,
            ],
            TransportOptions::DEFAULT_REQUEST_OPTIONS => [
                ClientCredentialsMiddleware::class => [
                    Options::API_TOKEN_CACHE_KEY => 'wyrimaps:battle:net:api:token',
                ],
            ],
        ],
    ]
);
