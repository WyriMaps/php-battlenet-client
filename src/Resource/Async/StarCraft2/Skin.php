<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\Async\StarCraft2;

use WyriMaps\BattleNet\Resource\StarCraft2\Skin as BaseSkin;

class Skin extends BaseSkin
{
    public function refresh(): Skin
    {
        return $this->wait($this->callAsync('refresh'));
    }
}
