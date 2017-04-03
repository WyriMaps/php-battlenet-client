<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\Sync\WorldOfWarcraft;

use WyriMaps\BattleNet\Resource\WorldOfWarcraft\BattleGroup as BaseBattleGroup;

class BattleGroup extends BaseBattleGroup
{
    public function refresh() : BattleGroup
    {
        return $this->wait($this->callAsync('refresh'));
    }
}
