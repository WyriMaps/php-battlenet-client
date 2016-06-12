<?php

namespace WyriMaps\BattleNet\Resource\WorldOfWarcraft;

use WyriHaximus\ApiClient\Resource\TransportAwareTrait;

abstract class Mount implements MountInterface
{
    use TransportAwareTrait;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var int
     */
    protected $spellId;

    /**
     * @var int
     */
    protected $creatureId;

    /**
     * @var int
     */
    protected $itemId;

    /**
     * @var int
     */
    protected $qualityId;

    /**
     * @var string
     */
    protected $icon;

    /**
     * @var bool
     */
    protected $isGround;

    /**
     * @var bool
     */
    protected $isFlying;
    /**
     * @var bool
     */
    protected $isAquatic;

    /**
     * @var bool
     */
    protected $isJumping;

    /**
     * @return int
     */
    public function id() : int
    {
        return $this->spellId;
    }

    /**
     * @return string
     */
    public function name() : string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function spellId() : int
    {
        return $this->spellId;
    }

    /**
     * @return int
     */
    public function creatureId() : int
    {
        return $this->creatureId;
    }

    /**
     * @return int
     */
    public function itemId() : int
    {
        return $this->itemId;
    }

    /**
     * @return int
     */
    public function qualityId() : int
    {
        return $this->qualityId;
    }

    /**
     * @return string
     */
    public function icon() : string
    {
        return $this->icon;
    }

    /**
     * @return bool
     */
    public function isGround() : bool
    {
        return $this->isGround;
    }

    /**
     * @return bool
     */
    public function isFlying() : bool
    {
        return $this->isFlying;
    }

    /**
     * @return bool
     */
    public function isAquatic() : bool
    {
        return $this->isAquatic;
    }

    /**
     * @return bool
     */
    public function isJumping() : bool
    {
        return $this->isJumping;
    }
}
