<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\Async\WorldOfWarcraft;

use WyriMaps\BattleNet\Resource\WorldOfWarcraft\CharacterClass as BaseCharacterClass;

class CharacterClass extends BaseCharacterClass
{
    public function refresh(): CharacterClass
    {
        return $this->wait($this->callAsync('refresh'));
    }
}
