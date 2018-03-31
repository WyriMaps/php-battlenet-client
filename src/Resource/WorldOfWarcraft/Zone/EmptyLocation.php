<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\WorldOfWarcraft\Zone;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyLocation implements LocationInterface, EmptyResourceInterface
{
    /**
     * @return int
     */
    public function id(): int
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
