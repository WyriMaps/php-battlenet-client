<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\Async;

use WyriMaps\BattleNet\Resource\BattleTag as BaseBattleTag;

class BattleTag extends BaseBattleTag
{
    public function refresh(): BattleTag
    {
        throw new \Exception('TODO: create refresh method!');
    }
}
