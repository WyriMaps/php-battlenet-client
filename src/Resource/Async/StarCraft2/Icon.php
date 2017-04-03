<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\Async\StarCraft2;

use WyriMaps\BattleNet\Resource\StarCraft2\Icon as BaseIcon;

class Icon extends BaseIcon
{
    public function refresh() : Icon
    {
        return $this->wait($this->callAsync('refresh'));
    }
}
