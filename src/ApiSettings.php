<?php declare(strict_types=1);

namespace WyriMaps\BattleNet;

use ApiClients\Foundation\Hydrator\Options as HydratorOptions;
use ApiClients\Foundation\Options as FoundationOptions;
use function ApiClients\Foundation\options_merge;
use ApiClients\Foundation\Transport\Options as TransportOptions;
use ApiClients\Middleware\HttpExceptions\HttpExceptionsMiddleware;
use ApiClients\Middleware\Json\JsonDecodeMiddleware;
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
                JsonDecodeMiddleware::class,
                UserAgentMiddleware::class,
                HttpExceptionsMiddleware::class,
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
        AuthenticationInterface $auth,
        array $suppliedOptions,
        string $suffix
    ): array {
        $options = options_merge(self::TRANSPORT_OPTIONS, $auth->getOptions());
        $options = options_merge($options, $suppliedOptions);
        $options[FoundationOptions::HYDRATOR_OPTIONS][HydratorOptions::NAMESPACE_SUFFIX] = $suffix;

        if (!empty($apiKey)) {
            $options[FoundationOptions::TRANSPORT_OPTIONS][TransportOptions::MIDDLEWARE][] = ApiKeyMiddleware::class;
            $options[FoundationOptions::TRANSPORT_OPTIONS][TransportOptions::DEFAULT_REQUEST_OPTIONS] = [
                ApiKeyMiddleware::class => [
                    Options::API_KEY => $apiKey,
                ],
            ];
        }

        return $options;
    }
}
