<?php declare(strict_types=1);

namespace WyriMaps\Tests\BattleNet\Resource\Sync\StarCraft2;

use ApiClients\Tools\ResourceTestUtilities\AbstractEmptyResourceTest;
use WyriMaps\BattleNet\Resource\Sync\StarCraft2\EmptyZergDecal;

final class EmptyZergDecalTest extends AbstractEmptyResourceTest
{
    public function getSyncAsync(): string
    {
        return 'Sync';
    }

    public function getClass(): string
    {
        return EmptyZergDecal::class;
    }
}
