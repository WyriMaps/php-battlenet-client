<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\Sync\StarCraft2;

use WyriMaps\BattleNet\Resource\StarCraft2\ProtossDecal as BaseProtossDecal;

class ProtossDecal extends BaseProtossDecal
{
    public function refresh() : ProtossDecal
    {
        return $this->wait($this->callAsync('refresh'));
    }
}
