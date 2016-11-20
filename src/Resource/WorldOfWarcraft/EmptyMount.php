<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\WorldOfWarcraft;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyMount implements MountInterface, EmptyResourceInterface
{
    /**
     * @return string
     */
    public function name() : string
    {
        return null;
    }

    /**
     * @return int
     */
    public function spellId() : int
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
     * @return int
     */
    public function itemId() : int
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
     * @return string
     */
    public function icon() : string
    {
        return null;
    }

    /**
     * @return bool
     */
    public function isGround() : bool
    {
        return null;
    }

    /**
     * @return bool
     */
    public function isFlying() : bool
    {
        return null;
    }

    /**
     * @return bool
     */
    public function isAquatic() : bool
    {
        return null;
    }

    /**
     * @return bool
     */
    public function isJumping() : bool
    {
        return null;
    }
}
