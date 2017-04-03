<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\Sync\WorldOfWarcraft;

use WyriMaps\BattleNet\Resource\WorldOfWarcraft\CharacterAchievement as BaseCharacterAchievement;

class CharacterAchievement extends BaseCharacterAchievement
{
    public function refresh() : CharacterAchievement
    {
        return $this->wait($this->callAsync('refresh'));
    }
}
