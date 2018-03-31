<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\Sync\StarCraft2;

use WyriMaps\BattleNet\Resource\StarCraft2\TerranDecal as BaseTerranDecal;

class TerranDecal extends BaseTerranDecal
{
    public function refresh(): TerranDecal
    {
        return $this->wait($this->callAsync('refresh'));
    }
}
