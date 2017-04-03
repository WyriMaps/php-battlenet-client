<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\WorldOfWarcraft;

use ApiClients\Foundation\Client;
use Rx\ObservableInterface;
use WyriMaps\BattleNet\CommandBus\Command\WorldOfWarcraft\BattleGroupsCommand;
use WyriMaps\BattleNet\CommandBus\Command\WorldOfWarcraft\MountsCommand;
use WyriMaps\BattleNet\CommandBus\Command\WorldOfWarcraft\PetsCommand;
use WyriMaps\BattleNet\CommandBus\Command\WorldOfWarcraft\RealmsCommand;
use WyriMaps\BattleNet\CommandBus\Command\WorldOfWarcraft\ZonesCommand;
use function ApiClients\Tools\Rx\unwrapObservableFromPromise;

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
     * List all battle groups
     *
     * @return ObservableInterface
     */
    public function battlegroups(): ObservableInterface
    {
        return unwrapObservableFromPromise($this->client->handle(
            new BattleGroupsCommand()
        ));
    }

    /**
     * List all mounts
     *
     * @return ObservableInterface
     */
    public function mounts(): ObservableInterface
    {
        return unwrapObservableFromPromise($this->client->handle(
            new MountsCommand()
        ));
    }

    /**
     * List all realms
     *
     * @return ObservableInterface
     */
    public function realms(): ObservableInterface
    {
        return unwrapObservableFromPromise($this->client->handle(
            new RealmsCommand()
        ));
    }

    /**
     * List all pets
     *
     * @return ObservableInterface
     */
    public function pets(): ObservableInterface
    {
        return unwrapObservableFromPromise($this->client->handle(
            new PetsCommand()
        ));
    }

    /**
     * List all zones
     *
     * @return ObservableInterface
     */
    public function zones(): ObservableInterface
    {
        return unwrapObservableFromPromise($this->client->handle(
            new ZonesCommand()
        ));
    }
}
