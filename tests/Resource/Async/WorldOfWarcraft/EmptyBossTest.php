<?php declare(strict_types=1);

namespace WyriMaps\Tests\BattleNet\Resource\Async\WorldOfWarcraft;

use ApiClients\Tools\ResourceTestUtilities\AbstractEmptyResourceTest;
use WyriMaps\BattleNet\Resource\Async\WorldOfWarcraft\EmptyBoss;

final class EmptyBossTest extends AbstractEmptyResourceTest
{
    public function getSyncAsync(): string
    {
        return 'Async';
    }

    public function getClass(): string
    {
        return EmptyBoss::class;
    }
}
