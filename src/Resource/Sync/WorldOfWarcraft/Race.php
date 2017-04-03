<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\Sync\WorldOfWarcraft;

use WyriMaps\BattleNet\Resource\WorldOfWarcraft\Race as BaseRace;

class Race extends BaseRace
{
    public function refresh() : Race
    {
        return $this->wait($this->callAsync('refresh'));
    }
}
