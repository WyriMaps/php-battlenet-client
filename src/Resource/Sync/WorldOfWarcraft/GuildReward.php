<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\Sync\WorldOfWarcraft;

use WyriMaps\BattleNet\Resource\WorldOfWarcraft\GuildReward as BaseGuildReward;

class GuildReward extends BaseGuildReward
{
    public function refresh(): GuildReward
    {
        return $this->wait($this->callAsync('refresh'));
    }
}
