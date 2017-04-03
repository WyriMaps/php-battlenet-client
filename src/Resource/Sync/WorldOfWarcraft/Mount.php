<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\Sync\WorldOfWarcraft;

use WyriMaps\BattleNet\Resource\WorldOfWarcraft\Mount as BaseMount;

class Mount extends BaseMount
{
    public function refresh() : Mount
    {
        return $this->wait($this->callAsync('refresh'));
    }
}
