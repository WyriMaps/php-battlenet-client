<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\Async\WorldOfWarcraft;

use WyriMaps\BattleNet\Resource\WorldOfWarcraft\Quest as BaseQuest;

class Quest extends BaseQuest
{
    public function refresh(): Quest
    {
        return $this->wait($this->callAsync('refresh'));
    }
}
