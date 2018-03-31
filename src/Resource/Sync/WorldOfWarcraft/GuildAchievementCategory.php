<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\Sync\WorldOfWarcraft;

use WyriMaps\BattleNet\Resource\WorldOfWarcraft\GuildAchievementCategory as BaseGuildAchievementCategory;

class GuildAchievementCategory extends BaseGuildAchievementCategory
{
    public function refresh(): GuildAchievementCategory
    {
        return $this->wait($this->callAsync('refresh'));
    }
}
