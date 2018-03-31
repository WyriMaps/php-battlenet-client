<?php declare(strict_types=1);

namespace WyriMaps\Tests\BattleNet\Middleware;

use ApiClients\Tools\TestUtilities\TestCase;
use React\EventLoop\Factory;
use RingCentral\Psr7\Request;
use WyriMaps\BattleNet\Middleware\ApiKeyMiddleware;
use WyriMaps\BattleNet\Options;
use function Clue\React\Block\await;

final class ApiKeyMiddlewareTest extends TestCase
{
    public function testPre()
    {
        $request = new Request('GET', 'https://example.com/');
        $middleware = new ApiKeyMiddleware();
        $resultRequest = await(
            $middleware->pre(
                $request,
                'abc',
                [
                    ApiKeyMiddleware::class => [
                        Options::API_KEY => 'foo.bar',
                    ],
                ]
            ),
            Factory::create()
        );

        $this->assertSame('https://example.com/?apikey=foo.bar', (string)$resultRequest->getUri());
    }

    public function testPreExistingQuery()
    {
        $request = new Request('GET', 'https://example.com/?ashesofalar=do_want');
        $middleware = new ApiKeyMiddleware();
        $resultRequest = await(
            $middleware->pre(
                $request,
                'abc',
                [
                    ApiKeyMiddleware::class => [
                        Options::API_KEY => 'foo.bar',
                    ],
                ]
            ),
            Factory::create()
        );

        $this->assertSame('https://example.com/?ashesofalar=do_want&apikey=foo.bar', (string)$resultRequest->getUri());
    }

    public function testPreEmptyOption()
    {
        $request = new Request('GET', 'https://example.com/');
        $middleware = new ApiKeyMiddleware();
        $resultRequest = await(
            $middleware->pre(
                $request,
                'abc',
                [
                    ApiKeyMiddleware::class => [
                        Options::API_KEY => '',
                    ],
                ]
            ),
            Factory::create()
        );

        $this->assertSame('https://example.com/', (string)$resultRequest->getUri());
    }

    public function testPreNoKey()
    {
        $request = new Request('GET', 'https://example.com/');
        $middleware = new ApiKeyMiddleware();
        $resultRequest = await(
            $middleware->pre(
                $request,
                'abc',
                [
                    ApiKeyMiddleware::class => [],
                ]
            ),
            Factory::create()
        );

        $this->assertSame('https://example.com/', (string)$resultRequest->getUri());
    }

    public function testPreEmptyOptions()
    {
        $request = new Request('GET', 'https://example.com/');
        $middleware = new ApiKeyMiddleware();
        $resultRequest = await(
            $middleware->pre(
                $request,
                'abc',
                []
            ),
            Factory::create()
        );

        $this->assertSame('https://example.com/', (string)$resultRequest->getUri());
    }
}
