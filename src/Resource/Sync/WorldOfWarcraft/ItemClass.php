<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\Sync\WorldOfWarcraft;

use WyriMaps\BattleNet\Resource\WorldOfWarcraft\ItemClass as BaseItemClass;

class ItemClass extends BaseItemClass
{
    public function refresh(): ItemClass
    {
        return $this->wait($this->callAsync('refresh'));
    }
}
