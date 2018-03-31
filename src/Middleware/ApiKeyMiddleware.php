<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Middleware;

use ApiClients\Foundation\Middleware\ErrorTrait;
use ApiClients\Foundation\Middleware\MiddlewareInterface;
use ApiClients\Foundation\Middleware\PostTrait;
use Psr\Http\Message\RequestInterface;
use React\Promise\CancellablePromiseInterface;
use WyriMaps\BattleNet\Options;
use function React\Promise\resolve;

class ApiKeyMiddleware implements MiddlewareInterface
{
    use PostTrait;
    use ErrorTrait;

    /**
     * @param  RequestInterface            $request
     * @param  string                      $transactionId
     * @param  array                       $options
     * @return CancellablePromiseInterface
     */
    public function pre(RequestInterface $request, string $transactionId, array $options = []): CancellablePromiseInterface
    {
        if (!isset($options[self::class][Options::API_KEY])) {
            return resolve($request);
        }

        if (empty($options[self::class][Options::API_KEY])) {
            return resolve($request);
        }

        parse_str($request->getUri()->getQuery(), $query);
        $query['apikey'] = $options[self::class][Options::API_KEY];
        $query = http_build_query($query);

        return resolve(
            $request->withUri(
                $request->getUri()->withQuery(
                    $query
                )
            )
        );
    }
}
