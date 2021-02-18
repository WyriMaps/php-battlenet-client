<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\WorldOfWarcraft;

use React\Promise\PromiseInterface;
use Rx\ObservableInterface;
use WyriMaps\BattleNet\Resource\WorldOfWarcraft\ItemInterface;
use WyriMaps\BattleNet\Resource\WorldOfWarcraft\MountInterface;
use WyriMaps\BattleNet\Resource\WorldOfWarcraft\PetInterface;
use WyriMaps\BattleNet\Resource\WorldOfWarcraft\PetTypeInterface;
use WyriMaps\BattleNet\Resource\WorldOfWarcraft\RealmInterface;
use WyriMaps\BattleNet\Resource\WorldOfWarcraft\ZoneInterface;

interface AsyncClientInterface
{
    /**
     * List all battle groups.
     *
     * @return ObservableInterface<BattleGroupInterface>
     */
    public function battleGroups(): ObservableInterface;

    /**
     * List all mounts.
     *
     * @return ObservableInterface<MountInterface>
     */
    public function mounts(): ObservableInterface;

    /**
     * List all realms.
     *
     * @return ObservableInterface<RealmInterface>
     */
    public function realms(): ObservableInterface;

    /**
     * List all pets.
     *
     * @return ObservableInterface<PetInterface>
     */
    public function pets(): ObservableInterface;

    /**
     * List all pet types.
     *
     * @return ObservableInterface<PetTypeInterface>
     */
    public function petTypes(): ObservableInterface;

    /**
     * List all zones.
     *
     * @return ObservableInterface<ZoneInterface>
     */
    public function zones(): ObservableInterface;

    /**
     * Fetch an item.
     *
     * @return PromiseInterface<ItemInterface>
     */
    public function item(int $id): PromiseInterface;
}
