<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\Async\StarCraft2;

use WyriMaps\BattleNet\Resource\StarCraft2\Portrait as BasePortrait;

class Portrait extends BasePortrait
{
    public function refresh() : Portrait
    {
        return $this->wait($this->callAsync('refresh'));
    }
}
