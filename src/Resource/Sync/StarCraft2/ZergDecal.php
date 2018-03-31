<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\Sync\StarCraft2;

use WyriMaps\BattleNet\Resource\StarCraft2\ZergDecal as BaseZergDecal;

class ZergDecal extends BaseZergDecal
{
    public function refresh(): ZergDecal
    {
        return $this->wait($this->callAsync('refresh'));
    }
}
