<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\Sync\WorldOfWarcraft;

use WyriMaps\BattleNet\Resource\WorldOfWarcraft\Boss as BaseBoss;

class Boss extends BaseBoss
{
    public function refresh(): Boss
    {
        return $this->wait($this->callAsync('refresh'));
    }
}
