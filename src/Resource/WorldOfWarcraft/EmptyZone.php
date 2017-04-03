<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\WorldOfWarcraft;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyZone implements ZoneInterface, EmptyResourceInterface
{
    /**
     * @return int
     */
    public function id() : int
    {
        return null;
    }

    /**
     * @return string
     */
    public function name() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function urlSlug() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function description() : string
    {
        return null;
    }

    /**
     * @return Zone\Location
     */
    public function location() : Zone\Location
    {
        return null;
    }

    /**
     * @return int
     */
    public function expansionId() : int
    {
        return null;
    }

    /**
     * @return string
     */
    public function numPlayers() : string
    {
        return null;
    }

    /**
     * @return bool
     */
    public function isDungeon() : bool
    {
        return null;
    }

    /**
     * @return bool
     */
    public function isRaid() : bool
    {
        return null;
    }

    /**
     * @return int
     */
    public function advisedMinLevel() : int
    {
        return null;
    }

    /**
     * @return int
     */
    public function advisedMaxLevel() : int
    {
        return null;
    }

    /**
     * @return int
     */
    public function advisedHeroicMinLevel() : int
    {
        return null;
    }

    /**
     * @return int
     */
    public function advisedHeroicMaxLevel() : int
    {
        return null;
    }

    /**
     * @return array
     */
    public function availableModes() : array
    {
        return null;
    }

    /**
     * @return int
     */
    public function lfgNormalMinGearLevel() : int
    {
        return null;
    }

    /**
     * @return int
     */
    public function lfgHeroicMinGearLevel() : int
    {
        return null;
    }

    /**
     * @return int
     */
    public function floors() : int
    {
        return null;
    }

    /**
     * @return array
     */
    public function bosses() : array
    {
        return null;
    }
}
