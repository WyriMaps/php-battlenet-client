<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\Sync\WorldOfWarcraft;

use WyriMaps\BattleNet\Resource\WorldOfWarcraft\Zone as BaseZone;

class Zone extends BaseZone
{
    public function refresh() : Zone
    {
        return $this->wait($this->callAsync('refresh'));
    }
}
