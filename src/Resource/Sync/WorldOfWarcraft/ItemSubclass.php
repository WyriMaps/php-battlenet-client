<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\Sync\WorldOfWarcraft;

use WyriMaps\BattleNet\Resource\WorldOfWarcraft\ItemSubclass as BaseItemSubclass;

class ItemSubclass extends BaseItemSubclass
{
    public function refresh(): ItemSubclass
    {
        return $this->wait($this->callAsync('refresh'));
    }
}
