<?php

namespace WyriMaps\BattleNet\Resource\WorldOfWarcraft;

use ApiClients\Foundation\Resource\TransportAwareTrait;

abstract class Pet implements PetInterface
{
    use TransportAwareTrait;
    /**
     * @var bool
     */
    protected $canBattle;
    /**
     * @var int
     */
    protected $creatureId;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $family;
    /**
     * @var string
     */
    protected $icon;
    /**
     * @var int
     */
    protected $qualityId;
    /**
     * @var array
     */
    protected $stats;
    /**
     * @var array
     */
    protected $strongAgainst;
    /**
     * @var int
     */
    protected $typeId;
    /**
     * @var array
     */
    protected $weakAgainst;
    /**
     * @return int
     */
    public function id() : int
    {
        return $this->creatureId;
    }
    /**
     * @return bool
     */
    public function canBattle() : bool
    {
        return $this->canBattle;
    }
    /**
     * @return int
     */
    public function creatureId() : int
    {
        return $this->creatureId;
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
    public function family() : string
    {
        return $this->family;
    }
    /**
     * @return string
     */
    public function icon() : string
    {
        return $this->icon;
    }
    /**
     * @return int
     */
    public function qualityId() : int
    {
        return $this->qualityId;
    }
    /**
     * @return array
     */
    public function stats() : array
    {
        return $this->stats;
    }
    /**
     * @return array
     */
    public function strongAgainst() : array
    {
        return $this->strongAgainst;
    }
    /**
     * @return int
     */
    public function typeId() : int
    {
        return $this->typeId;
    }
    /**
     * @return array
     */
    public function weakAgainst() : array
    {
        return $this->weakAgainst;
    }
}
