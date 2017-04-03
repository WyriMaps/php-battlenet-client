<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\WorldOfWarcraft;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyPetType implements PetTypeInterface, EmptyResourceInterface
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
    public function key() : string
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
     * @return int
     */
    public function typeAbilityId() : int
    {
        return null;
    }

    /**
     * @return int
     */
    public function strongAgainstId() : int
    {
        return null;
    }

    /**
     * @return int
     */
    public function weakAgainstId() : int
    {
        return null;
    }
}
