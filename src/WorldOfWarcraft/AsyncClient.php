<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\WorldOfWarcraft;

use ApiClients\Foundation\Client;
use ApiClients\Foundation\Hydrator\CommandBus\Command\HydrateCommand;
use ApiClients\Foundation\Transport\CommandBus\Command\SimpleRequestCommand;
use Psr\Http\Message\ResponseInterface;
use Rx\Observable;
use Rx\ObservableInterface;
use Rx\React\Promise;

class AsyncClient
{
    /**
     * @var Client
     */
    protected $client;

    /**
     * AsyncClient constructor.
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * List all mounts
     *
     * @return ObservableInterface
     */
    public function mounts(): ObservableInterface
    {
        return Promise::toObservable(
            $this->client->handle(new SimpleRequestCommand('wow/mount/'))
        )->flatMap(function (ResponseInterface $response) {
            return Observable::fromArray($response->getBody()->getJson()['mounts']);
        })->flatMap(function ($mount) {
            return Promise::toObservable($this->client->handle(new HydrateCommand('WorldOfWarcraft\Mount', $mount)));
        });
    }

    /**
     * List all realms
     *
     * @return ObservableInterface
     */
    public function realms(): ObservableInterface
    {
        return Promise::toObservable(
            $this->client->handle(new SimpleRequestCommand('wow/realm/status'))
        )->flatMap(function (ResponseInterface $response) {
            return Observable::fromArray($response->getBody()->getJson()['realms']);
        })->flatMap(function ($realm) {
            return Promise::toObservable($this->client->handle(new HydrateCommand('WorldOfWarcraft\Realm', $realm)));
        });
    }

    /**
     * List all pets
     *
     * @return ObservableInterface
     */
    public function pets(): ObservableInterface
    {
        return Promise::toObservable(
            $this->client->handle(new SimpleRequestCommand('wow/pet/'))
        )->flatMap(function (ResponseInterface $response) {
            return Observable::fromArray($response->getBody()->getJson()['pets']);
        })->flatMap(function ($pet) {
            return Promise::toObservable($this->client->handle(new HydrateCommand('WorldOfWarcraft\Pet', $pet)));
        });
    }
}
