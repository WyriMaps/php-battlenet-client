<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\Sync\WorldOfWarcraft;

use WyriMaps\BattleNet\Resource\WorldOfWarcraft\GuildAchievement as BaseGuildAchievement;

class GuildAchievement extends BaseGuildAchievement
{
    public function refresh(): GuildAchievement
    {
        return $this->wait($this->callAsync('refresh'));
    }
}
