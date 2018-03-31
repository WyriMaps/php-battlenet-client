<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\Sync\WorldOfWarcraft;

use WyriMaps\BattleNet\Resource\WorldOfWarcraft\GuildPerk as BaseGuildPerk;

class GuildPerk extends BaseGuildPerk
{
    public function refresh(): GuildPerk
    {
        return $this->wait($this->callAsync('refresh'));
    }
}
