<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\WorldOfWarcraft;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyGuildAchievement implements GuildAchievementInterface, EmptyResourceInterface
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
    public function title() : string
    {
        return null;
    }

    /**
     * @return int
     */
    public function points() : int
    {
        return null;
    }

    /**
     * @return string
     */
    public function description() : string
    {
        return null;
    }

    /**
     * @return array
     */
    public function rewardItems() : array
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
     * @return array
     */
    public function criteria() : array
    {
        return null;
    }

    /**
     * @return bool
     */
    public function accountWide() : bool
    {
        return null;
    }

    /**
     * @return int
     */
    public function factionId() : int
    {
        return null;
    }
}
