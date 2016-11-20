<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\WorldOfWarcraft;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyPet implements PetInterface, EmptyResourceInterface
{
    /**
     * @return bool
     */
    public function canBattle() : bool
    {
        return null;
    }

    /**
     * @return int
     */
    public function creatureId() : int
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
    public function family() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function icon() : string
    {
        return null;
    }

    /**
     * @return int
     */
    public function qualityId() : int
    {
        return null;
    }

    /**
     * @return array
     */
    public function stats() : array
    {
        return null;
    }

    /**
     * @return array
     */
    public function strongAgainst() : array
    {
        return null;
    }

    /**
     * @return int
     */
    public function typeId() : int
    {
        return null;
    }

    /**
     * @return array
     */
    public function weakAgainst() : array
    {
        return null;
    }
}
