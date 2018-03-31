<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyBattleTag implements BattleTagInterface, EmptyResourceInterface
{
    /**
     * @return string
     */
    public function battletag(): string
    {
        return null;
    }

    /**
     * @return int
     */
    public function id(): int
    {
        return null;
    }
}
