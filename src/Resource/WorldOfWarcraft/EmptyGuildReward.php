<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\WorldOfWarcraft;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyGuildReward implements GuildRewardInterface, EmptyResourceInterface
{
    /**
     * @return int
     */
    public function minGuildLevel() : int
    {
        return null;
    }

    /**
     * @return int
     */
    public function minGuildRepLevel() : int
    {
        return null;
    }

    /**
     * @return array
     */
    public function achievement() : array
    {
        return null;
    }

    /**
     * @return array
     */
    public function item() : array
    {
        return null;
    }
}
