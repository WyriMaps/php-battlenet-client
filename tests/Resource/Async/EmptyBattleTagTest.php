<?php declare(strict_types=1);

namespace WyriMaps\Tests\BattleNet\Resource\Async;

use ApiClients\Tools\ResourceTestUtilities\AbstractEmptyResourceTest;
use WyriMaps\BattleNet\Resource\Async\EmptyBattleTag;

final class EmptyBattleTagTest extends AbstractEmptyResourceTest
{
    public function getSyncAsync(): string
    {
        return 'Async';
    }

    public function getClass(): string
    {
        return EmptyBattleTag::class;
    }
}
