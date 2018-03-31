<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\WorldOfWarcraft;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyItemSubclass implements ItemSubclassInterface, EmptyResourceInterface
{
    /**
     * @return int
     */
    public function subclass(): int
    {
        return null;
    }

    /**
     * @return string
     */
    public function name(): string
    {
        return null;
    }
}
