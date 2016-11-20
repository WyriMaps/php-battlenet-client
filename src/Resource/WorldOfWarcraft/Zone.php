<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\WorldOfWarcraft;

use ApiClients\Foundation\Hydrator\Annotations\Collection;
use ApiClients\Foundation\Hydrator\Annotations\EmptyResource;
use ApiClients\Foundation\Hydrator\Annotations\Nested;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @Collection(
 *     bosses="WorldOfWarcraft\Boss"
 * )
 * @Nested(
 *     location="WorldOfWarcraft\Zone\Location"
 * )
 * @EmptyResource("WorldOfWarcraft\EmptyZone")
 */
abstract class Zone extends AbstractResource implements ZoneInterface
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $urlSlug;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var Zone\Location
     */
    protected $location;

    /**
     * @var int
     */
    protected $expansionId;

    /**
     * @var string
     */
    protected $numPlayers;

    /**
     * @var bool
     */
    protected $isDungeon;

    /**
     * @var bool
     */
    protected $isRaid;

    /**
     * @var int
     */
    protected $advisedMinLevel;

    /**
     * @var int
     */
    protected $advisedMaxLevel;

    /**
     * @var int
     */
    protected $advisedHeroicMinLevel;

    /**
     * @var int
     */
    protected $advisedHeroicMaxLevel;

    /**
     * @var array
     */
    protected $availableModes;

    /**
     * @var int
     */
    protected $lfgNormalMinGearLevel;

    /**
     * @var int
     */
    protected $lfgHeroicMinGearLevel;

    /**
     * @var int
     */
    protected $floors;

    /**
     * @var array
     */
    protected $bosses;

    /**
     * @return int
     */
    public function id() : int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function name() : string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function urlSlug() : string
    {
        return $this->urlSlug;
    }

    /**
     * @return string
     */
    public function description() : string
    {
        return $this->description;
    }

    /**
     * @return Zone\Location
     */
    public function location() : Zone\Location
    {
        return $this->location;
    }

    /**
     * @return int
     */
    public function expansionId() : int
    {
        return $this->expansionId;
    }

    /**
     * @return string
     */
    public function numPlayers() : string
    {
        return $this->numPlayers;
    }

    /**
     * @return bool
     */
    public function isDungeon() : bool
    {
        return $this->isDungeon;
    }

    /**
     * @return bool
     */
    public function isRaid() : bool
    {
        return $this->isRaid;
    }

    /**
     * @return int
     */
    public function advisedMinLevel() : int
    {
        return $this->advisedMinLevel;
    }

    /**
     * @return int
     */
    public function advisedMaxLevel() : int
    {
        return $this->advisedMaxLevel;
    }

    /**
     * @return int
     */
    public function advisedHeroicMinLevel() : int
    {
        return $this->advisedHeroicMinLevel;
    }

    /**
     * @return int
     */
    public function advisedHeroicMaxLevel() : int
    {
        return $this->advisedHeroicMaxLevel;
    }

    /**
     * @return array
     */
    public function availableModes() : array
    {
        return $this->availableModes;
    }

    /**
     * @return int
     */
    public function lfgNormalMinGearLevel() : int
    {
        return $this->lfgNormalMinGearLevel;
    }

    /**
     * @return int
     */
    public function lfgHeroicMinGearLevel() : int
    {
        return $this->lfgHeroicMinGearLevel;
    }

    /**
     * @return int
     */
    public function floors() : int
    {
        return $this->floors;
    }

    /**
     * @return array
     */
    public function bosses() : array
    {
        return $this->bosses;
    }
}
