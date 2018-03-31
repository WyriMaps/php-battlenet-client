<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\Async\WorldOfWarcraft;

use WyriMaps\BattleNet\Resource\WorldOfWarcraft\Item as BaseItem;

class Item extends BaseItem
{
    public function refresh(): Item
    {
        return $this->wait($this->callAsync('refresh'));
    }
}
