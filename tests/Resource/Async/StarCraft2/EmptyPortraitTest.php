<?php declare(strict_types=1);

namespace WyriMaps\Tests\BattleNet\Resource\Async\StarCraft2;

use ApiClients\Tools\ResourceTestUtilities\AbstractEmptyResourceTest;
use WyriMaps\BattleNet\Resource\Async\StarCraft2\EmptyPortrait;

final class EmptyPortraitTest extends AbstractEmptyResourceTest
{
    public function getSyncAsync(): string
    {
        return 'Async';
    }

    public function getClass(): string
    {
        return EmptyPortrait::class;
    }
}
