<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\WorldOfWarcraft;

use ApiClients\Foundation\Resource\ResourceInterface;

interface ZoneInterface extends ResourceInterface
{
    /**
     * @return int
     */
    public function id() : int;

    /**
     * @return string
     */
    public function name() : string;

    /**
     * @return string
     */
    public function urlSlug() : string;

    /**
     * @return string
     */
    public function description() : string;

    /**
     * @return Zone\Location
     */
    public function location() : Zone\Location;

    /**
     * @return int
     */
    public function expansionId() : int;

    /**
     * @return string
     */
    public function numPlayers() : string;

    /**
     * @return bool
     */
    public function isDungeon() : bool;

    /**
     * @return bool
     */
    public function isRaid() : bool;

    /**
     * @return int
     */
    public function advisedMinLevel() : int;

    /**
     * @return int
     */
    public function advisedMaxLevel() : int;

    /**
     * @return int
     */
    public function advisedHeroicMinLevel() : int;

    /**
     * @return int
     */
    public function advisedHeroicMaxLevel() : int;

    /**
     * @return array
     */
    public function availableModes() : array;

    /**
     * @return int
     */
    public function lfgNormalMinGearLevel() : int;

    /**
     * @return int
     */
    public function lfgHeroicMinGearLevel() : int;

    /**
     * @return int
     */
    public function floors() : int;

    /**
     * @return array
     */
    public function bosses() : array;
}
