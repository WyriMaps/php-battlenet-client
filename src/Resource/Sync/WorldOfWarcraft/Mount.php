<?php

namespace WyriMaps\BattleNet\Resource\WorldOfWarcraft\Sync;

use WyriMaps\BattleNet\Resource\WorldOfWarcraft\Mount as BaseMount;

class Mount extends BaseMount
{
    public function refresh() : Mount
    {
        return $this->wait($this->callAsync('refresh'));
    }
}
