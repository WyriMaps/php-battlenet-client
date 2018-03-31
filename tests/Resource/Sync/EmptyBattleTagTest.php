<?php declare(strict_types=1);

namespace WyriMaps\Tests\BattleNet\Resource\Sync;

use ApiClients\Tools\ResourceTestUtilities\AbstractEmptyResourceTest;
use WyriMaps\BattleNet\Resource\Sync\EmptyBattleTag;

final class EmptyBattleTagTest extends AbstractEmptyResourceTest
{
    public function getSyncAsync(): string
    {
        return 'Sync';
    }

    public function getClass(): string
    {
        return EmptyBattleTag::class;
    }
}
