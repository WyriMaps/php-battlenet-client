<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\Async\WorldOfWarcraft;

use WyriMaps\BattleNet\Resource\WorldOfWarcraft\PetType as BasePetType;

class PetType extends BasePetType
{
    public function refresh(): PetType
    {
        return $this->wait($this->callAsync('refresh'));
    }
}
