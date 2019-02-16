<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Middleware;

use ApiClients\Foundation\Middleware\ErrorTrait;
use ApiClients\Foundation\Middleware\MiddlewareInterface;
use ApiClients\Foundation\Middleware\PostTrait;
use ApiClients\Foundation\Transport\Service\RequestService;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use React\Cache\ArrayCache;
use React\Cache\CacheInterface;
use React\Promise\CancellablePromiseInterface;
use React\Promise\PromiseInterface;
use function React\Promise\resolve;
use RingCentral\Psr7\Request;
use WyriMaps\BattleNet\Options;

final class ClientCredentialsMiddleware implements MiddlewareInterface
{
    use PostTrait;
    use ErrorTrait;

    /** @var bool */
    private $fetchingToken = false;

    /** @var RequestService */
    private $requestService;

    /**
     * @param RequestService $requestService
     */
    public function __construct(RequestService $requestService)
    {
        $this->requestService = $requestService;
    }

    /**
     * @param  RequestInterface            $request
     * @param  string                      $transactionId
     * @param  array                       $options
     * @return CancellablePromiseInterface
     */
    public function pre(RequestInterface $request, string $transactionId, array $options = []): CancellablePromiseInterface
    {
        if ($request->getUri()->getPath() === '/oauth/token') {
            return resolve($request);
        }

        if (!isset($options[self::class][Options::API_KEY])) {
            return resolve($request);
        }

        if (empty($options[self::class][Options::API_KEY])) {
            return resolve($request);
        }

        if (!isset($options[self::class][Options::API_SECRET])) {
            return resolve($request);
        }

        if (empty($options[self::class][Options::API_SECRET])) {
            return resolve($request);
        }

        if (!isset($options[self::class][Options::API_TOKEN_CACHE_KEY])) {
            return resolve($request);
        }

        $cache = $options[self::class][Options::API_TOKEN_CACHE] ?? new ArrayCache();
        if (!($cache instanceof CacheInterface)) {
            $cache = new ArrayCache();
        }

        return $cache->get($options[self::class][Options::API_TOKEN_CACHE_KEY])->then(function (?string $token) use ($cache, $options) {
            if ($token === null) {
                return $this->fetchAndStoreToken($cache, $options);
            }

            return $token;
        })->then(function (string $accessToken) use ($request) {
            return $request->withAddedHeader('Authorization', 'Bearer ' . $accessToken);
        });
    }

    private function fetchAndStoreToken(CacheInterface $cache, array $options): PromiseInterface
    {
        return $this->requestService->request(
            new Request(
                'POST',
                'https://eu.battle.net/oauth/token',
                [
                    'Content-Length' => 29,
                    'Content-Type' => 'application/x-www-form-urlencoded',
                    'Authorization' => 'Basic ' . base64_encode($options[self::class][Options::API_KEY] . ':' . $options[self::class][Options::API_SECRET]),
                ],
                'grant_type=client_credentials'
            ),
            []
        )->then(function (ResponseInterface $response) use ($cache, $options) {
            $json = $response->getBody()->getParsedContents();

            return $cache->set(
                $options[self::class][Options::API_TOKEN_CACHE_KEY],
                $json['access_token'],
                $json['expires_in'] - 300
            )->then(function () use ($json) {
                return $json['access_token'];
            });
        });
    }
}
