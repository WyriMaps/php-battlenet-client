<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\WorldOfWarcraft;

use React\Promise\PromiseInterface;
use Rx\ObservableInterface;

interface AsyncClientInterface
{
    /**
     * List all battle groups.
     *
     * @return ObservableInterface
     */
    public function battleGroups(): ObservableInterface;

    /**
     * List all mounts.
     *
     * @return ObservableInterface
     */
    public function mounts(): ObservableInterface;

    /**
     * List all realms.
     *
     * @return ObservableInterface
     */
    public function realms(): ObservableInterface;

    /**
     * List all pets.
     *
     * @return ObservableInterface
     */
    public function pets(): ObservableInterface;

    /**
     * List all pet types.
     *
     * @return ObservableInterface
     */
    public function petTypes(): ObservableInterface;

    /**
     * List all zones.
     *
     * @return ObservableInterface
     */
    public function zones(): ObservableInterface;

    /**
     * Fetch an item.
     *
     * @return PromiseInterface
     */
    public function item(int $id): PromiseInterface;
}
