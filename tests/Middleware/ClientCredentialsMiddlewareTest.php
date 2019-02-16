<?php declare(strict_types=1);

namespace WyriMaps\Tests\BattleNet\Middleware;

use ApiClients\Foundation\Transport\Service\RequestService;
use ApiClients\Middleware\Json\JsonStream;
use ApiClients\Tools\TestUtilities\TestCase;
use function Clue\React\Block\await;
use Prophecy\Argument;
use Psr\Http\Message\RequestInterface;
use React\EventLoop\Factory;
use function React\Promise\resolve;
use RingCentral\Psr7\Request;
use RingCentral\Psr7\Response;
use WyriMaps\BattleNet\Middleware\ClientCredentialsMiddleware;
use WyriMaps\BattleNet\Options;

final class ClientCredentialsMiddlewareTest extends TestCase
{
    /** @var RequestService */
    private $requestService;

    /** @var ClientCredentialsMiddleware */
    private $middleware;

    /** @var string */
    private $token = '2he8fqh29e87fhq8e7hf98q2gf986qye';

    /**
     * @before
     */
    public function setUpMiddleware()
    {
        $this->requestService = $this->prophesize(RequestService::class);
        $this->middleware = new ClientCredentialsMiddleware($this->requestService->reveal());
    }

    public function testPre()
    {
        $this->setUpFetchBearerToken();

        $request = new Request('GET', 'https://example.com/');
        $resultRequest = await(
            $this->middleware->pre(
                $request,
                'abc',
                [
                    ClientCredentialsMiddleware::class => [
                        Options::API_KEY => 'foo.bar',
                        Options::API_SECRET => 'rab.oof',
                        Options::API_TOKEN_CACHE_KEY => 'API_TOKEN_CACHE_KEY',
                    ],
                ]
            ),
            Factory::create()
        );

        $this->assertSame('https://example.com/', (string)$resultRequest->getUri());
        $this->assertTrue($resultRequest->hasHeader('Authorization'));
        $this->assertSame('Bearer ' . $this->token, $resultRequest->getHeaderLine('Authorization'));
    }

    public function testPreExistingQuery()
    {
        $this->setUpFetchBearerToken();

        $request = new Request('GET', 'https://example.com/?ashesofalar=do_want');
        $resultRequest = await(
            $this->middleware->pre(
                $request,
                'abc',
                [
                    ClientCredentialsMiddleware::class => [
                        Options::API_KEY => 'foo.bar',
                        Options::API_SECRET => 'rab.oof',
                        Options::API_TOKEN_CACHE_KEY => 'API_TOKEN_CACHE_KEY',
                    ],
                ]
            ),
            Factory::create()
        );

        $this->assertSame('https://example.com/?ashesofalar=do_want', (string)$resultRequest->getUri());
        $this->assertTrue($resultRequest->hasHeader('Authorization'));
        $this->assertSame('Bearer ' . $this->token, $resultRequest->getHeaderLine('Authorization'));
    }

    public function testPreEmptyOption()
    {
        $request = new Request('GET', 'https://example.com/');
        $resultRequest = await(
            $this->middleware->pre(
                $request,
                'abc',
                [
                    ClientCredentialsMiddleware::class => [
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
        $resultRequest = await(
            $this->middleware->pre(
                $request,
                'abc',
                [
                    ClientCredentialsMiddleware::class => [],
                ]
            ),
            Factory::create()
        );

        $this->assertSame('https://example.com/', (string)$resultRequest->getUri());
    }

    public function testPreEmptyOptions()
    {
        $request = new Request('GET', 'https://example.com/');
        $resultRequest = await(
            $this->middleware->pre(
                $request,
                'abc',
                []
            ),
            Factory::create()
        );

        $this->assertSame('https://example.com/', (string)$resultRequest->getUri());
    }

    private function setUpFetchBearerToken()
    {
        $this->requestService->request(
            Argument::that(function (RequestInterface $request) {
                self::assertSame('POST', $request->getMethod());
                self::assertSame('https://eu.battle.net/oauth/token', (string)$request->getUri());
                self::assertSame([
                    'Host' => ['eu.battle.net'],
                    'Content-Length' => ['29'],
                    'Content-Type' => ['application/x-www-form-urlencoded'],
                    'Authorization' => ['Basic Zm9vLmJhcjpyYWIub29m'],
                ], $request->getHeaders());
                self::assertSame('grant_type=client_credentials', $request->getBody()->getContents());

                return true;
            }),
            []
        )->shouldBeCalled()->willReturn(resolve(new Response(
            200,
            [],
            new JsonStream([
                'access_token' => $this->token,
                'expires_in' => 3600,
            ])
        )));
    }
}
