<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\WorldOfWarcraft;

interface ClientInterface
{
    /**
     * List all battle groups.
     *
     * @return array
     */
    public function battleGroups(): array;

    /**
     * List all mounts.
     *
     * @return array
     */
    public function mounts(): array;

    /**
     * List all realms.
     *
     * @return array
     */
    public function realms(): array;

    /**
     * List all pets.
     *
     * @return array
     */
    public function pets(): array;

    /**
     * List all pet types.
     *
     * @return array
     */
    public function petTypes(): array;

    /**
     * List all zones.
     *
     * @return array
     */
    public function zones(): array;
}
