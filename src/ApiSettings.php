<?php declare(strict_types=1);

namespace WyriMaps\BattleNet;

use ApiClients\Foundation\Hydrator\Options as HydratorOptions;
use ApiClients\Foundation\Options as FoundationOptions;
use ApiClients\Foundation\Transport\Middleware\JsonDecodeMiddleware;
use ApiClients\Foundation\Transport\Options as TransportOptions;
use ApiClients\Middleware\UserAgent\Options as UserAgentMiddlewareOptions;
use ApiClients\Middleware\UserAgent\UserAgentMiddleware;
use ApiClients\Middleware\UserAgent\UserAgentStrategies;
use WyriMaps\BattleNet\Middleware\ApiKeyMiddleware;

final class ApiSettings
{
    const NAMESPACE = 'WyriMaps\\BattleNet\\Resource';

    const TRANSPORT_OPTIONS = [
        FoundationOptions::HYDRATOR_OPTIONS => [
            HydratorOptions::NAMESPACE => self::NAMESPACE,
            HydratorOptions::NAMESPACE_DIR => __DIR__ . DIRECTORY_SEPARATOR . 'Resource' . DIRECTORY_SEPARATOR,
        ],
        FoundationOptions::TRANSPORT_OPTIONS => [
            TransportOptions::HOST => Region::DEFAULT,
            TransportOptions::MIDDLEWARE => [
                UserAgentMiddleware::class,
            ],
            TransportOptions::DEFAULT_REQUEST_OPTIONS => [
                UserAgentMiddleware::class => [
                    UserAgentMiddlewareOptions::STRATEGY => UserAgentStrategies::PACKAGE_VERSION,
                    UserAgentMiddlewareOptions::PACKAGE => 'wyrimaps/battlenet-client',
                ],
            ],
        ],
    ];

    public static function getOptions(
        string $apiKey,
        string $suffix
    ): array {
        $options = self::TRANSPORT_OPTIONS;
        $options[FoundationOptions::HYDRATOR_OPTIONS][HydratorOptions::NAMESPACE_SUFFIX] = $suffix;

        if (!empty($apiKey)) {
            $options[FoundationOptions::TRANSPORT_OPTIONS][TransportOptions::MIDDLEWARE] = [
                JsonDecodeMiddleware::class,
                ApiKeyMiddleware::class,
            ];
            $options[FoundationOptions::TRANSPORT_OPTIONS][TransportOptions::DEFAULT_REQUEST_OPTIONS] = [
                ApiKeyMiddleware::class => [
                    Options::API_KEY => $apiKey,
                ],
            ];
        }

        return $options;
    }
}
