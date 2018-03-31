<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\Sync\WorldOfWarcraft;

use WyriMaps\BattleNet\Resource\WorldOfWarcraft\Spell as BaseSpell;

class Spell extends BaseSpell
{
    public function refresh(): Spell
    {
        return $this->wait($this->callAsync('refresh'));
    }
}
