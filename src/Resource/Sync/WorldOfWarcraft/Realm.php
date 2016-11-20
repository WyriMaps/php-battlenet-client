<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\Sync\WorldOfWarcraft;

use WyriMaps\BattleNet\Resource\WorldOfWarcraft\Realm as BaseRealm;

class Realm extends BaseRealm
{
    public function refresh() : Realm
    {
        return $this->wait($this->callAsync('refresh'));
    }
}
