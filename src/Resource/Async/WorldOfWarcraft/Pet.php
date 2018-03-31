<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\Async\WorldOfWarcraft;

use WyriMaps\BattleNet\Resource\WorldOfWarcraft\Pet as BasePet;

class Pet extends BasePet
{
    public function refresh(): Pet
    {
        return $this->wait($this->callAsync('refresh'));
    }
}
