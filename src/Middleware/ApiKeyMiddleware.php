<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Middleware;

use ApiClients\Foundation\Middleware\DefaultPriorityTrait;
use ApiClients\Foundation\Middleware\ErrorTrait;
use ApiClients\Foundation\Middleware\MiddlewareInterface;
use ApiClients\Foundation\Middleware\PostTrait;
use Psr\Http\Message\RequestInterface;
use React\Promise\CancellablePromiseInterface;
use function React\Promise\resolve;
use WyriMaps\BattleNet\Options;

class ApiKeyMiddleware implements MiddlewareInterface
{
    use DefaultPriorityTrait;
    use PostTrait;
    use ErrorTrait;

    /**
     * @param RequestInterface $request
     * @param array $options
     * @return CancellablePromiseInterface
     */
    public function pre(RequestInterface $request, array $options = []): CancellablePromiseInterface
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
