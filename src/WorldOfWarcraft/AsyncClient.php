<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\WorldOfWarcraft;

use ApiClients\Foundation\Client as FoundationClient;
use function ApiClients\Tools\Rx\unwrapObservableFromPromise;
use Rx\ObservableInterface;
use WyriMaps\BattleNet\CommandBus\Command\WorldOfWarcraft\BattleGroupsCommand;
use WyriMaps\BattleNet\CommandBus\Command\WorldOfWarcraft\MountsCommand;
use WyriMaps\BattleNet\CommandBus\Command\WorldOfWarcraft\PetsCommand;
use WyriMaps\BattleNet\CommandBus\Command\WorldOfWarcraft\PetTypesCommand;
use WyriMaps\BattleNet\CommandBus\Command\WorldOfWarcraft\RealmsCommand;
use WyriMaps\BattleNet\CommandBus\Command\WorldOfWarcraft\ZonesCommand;

final class AsyncClient implements AsyncClientInterface
{
    /**
     * @var FoundationClient
     */
    protected $client;

    /**
     * AsyncClient constructor.
     * @param FoundationClient $client
     */
    public function __construct(FoundationClient $client)
    {
        $this->client = $client;
    }

    /**
     * List all battle groups.
     *
     * @return ObservableInterface
     */
    public function battleGroups(): ObservableInterface
    {
        return unwrapObservableFromPromise($this->client->handle(
            new BattleGroupsCommand()
        ));
    }

    /**
     * List all mounts.
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
     * List all realms.
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
     * List all pets.
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
     * List all pet types.
     *
     * @return ObservableInterface
     */
    public function petTypes(): ObservableInterface
    {
        return unwrapObservableFromPromise($this->client->handle(
            new PetTypesCommand()
        ));
    }

    /**
     * List all zones.
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
