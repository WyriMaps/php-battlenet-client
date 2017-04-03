<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\WorldOfWarcraft;

use ApiClients\Foundation\Resource\ResourceInterface;

interface GuildPerkInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'WorldOfWarcraft\\GuildPerk';

    /**
     * @return int
     */
    public function guildLevel() : int;

    /**
     * @return array
     */
    public function spell() : array;
}
