<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Authentication;

use WyriMaps\BattleNet\AuthenticationInterface;
use ApiClients\Foundation\Options as FoundationOptions;
use ApiClients\Foundation\Transport\Options as TransportOptions;
use ApiClients\Middleware\TokenAuthorization\Options as TokenAuthorizationHeaderMiddlewareOptions;
use ApiClients\Middleware\TokenAuthorization\TokenAuthorizationHeaderMiddleware;
use WyriMaps\BattleNet\Middleware\ClientCredentialsMiddleware;
use WyriMaps\BattleNet\Options;

final class ClientCredentials implements AuthenticationInterface
{
    /** @var string */
    private $key;

    /** @var string */
    private $secret;

    /**
     * @param string $key
     * @param string $secret
     */
    public function __construct(string $key, string $secret)
    {
        $this->key = $key;
        $this->secret = $secret;
    }

    public function getOptions(): array
    {
        return [
            FoundationOptions::TRANSPORT_OPTIONS => [
                TransportOptions::MIDDLEWARE => [
                    ClientCredentialsMiddleware::class,
                ],
                TransportOptions::DEFAULT_REQUEST_OPTIONS => [
                    ClientCredentialsMiddleware::class => [
                        Options::API_KEY => $this->key,
                        Options::API_SECRET => $this->secret,
                    ],
                ],
            ],
        ];
    }
}
