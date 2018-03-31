<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\Sync;

use ApiClients\Foundation\Hydrator\CommandBus\Command\BuildAsyncFromSyncCommand;
use WyriMaps\BattleNet\Resource\BattleTag as BaseBattleTag;
use WyriMaps\BattleNet\Resource\BattleTagInterface;

class BattleTag extends BaseBattleTag
{
    public function refresh(): BattleTag
    {
        return $this->wait($this->handleCommand(new BuildAsyncFromSyncCommand(self::HYDRATE_CLASS, $this))->then(function (BattleTagInterface $battleTag) {
            return $battleTag->refresh();
        }));
    }
}
