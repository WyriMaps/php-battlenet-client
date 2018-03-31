<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\Async\WorldOfWarcraft;

use WyriMaps\BattleNet\Resource\WorldOfWarcraft\Npc as BaseNpc;

class Npc extends BaseNpc
{
    public function refresh(): Npc
    {
        return $this->wait($this->callAsync('refresh'));
    }
}
