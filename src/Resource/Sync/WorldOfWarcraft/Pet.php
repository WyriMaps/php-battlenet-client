<?php

namespace WyriMaps\BattleNet\Resource\Sync\WorldOfWarcraft;

use WyriMaps\BattleNet\Resource\WorldOfWarcraft\Pet as BasePet;

class Pet extends BasePet
{
    public function refresh() : Pet
    {
        return $this->wait($this->callAsync('refresh'));
    }
}
