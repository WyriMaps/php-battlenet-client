<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\Async\WorldOfWarcraft\Zone;

use WyriMaps\BattleNet\Resource\WorldOfWarcraft\Zone\Location as BaseLocation;

class Location extends BaseLocation
{
    public function refresh(): Location
    {
        return $this->wait($this->callAsync('refresh'));
    }
}
