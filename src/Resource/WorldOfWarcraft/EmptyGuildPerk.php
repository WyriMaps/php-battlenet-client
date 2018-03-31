<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\WorldOfWarcraft;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyGuildPerk implements GuildPerkInterface, EmptyResourceInterface
{
    /**
     * @return int
     */
    public function guildLevel(): int
    {
        return null;
    }

    /**
     * @return array
     */
    public function spell(): array
    {
        return null;
    }
}
