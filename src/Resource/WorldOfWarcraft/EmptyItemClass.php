<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\WorldOfWarcraft;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyItemClass implements ItemClassInterface, EmptyResourceInterface
{
    /**
     * @return int
     */
    public function class() : int
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
     * @return array
     */
    public function subclasses() : array
    {
        return null;
    }
}
