<?php declare(strict_types=1);

namespace WyriMaps\Tests\BattleNet\Resource\Async;

use ApiClients\Tools\ResourceTestUtilities\AbstractResourceTest;
use WyriMaps\BattleNet\ApiSettings;
use WyriMaps\BattleNet\Resource\BattleTag;

class BattleTagTest extends AbstractResourceTest
{
    public function getSyncAsync(): string
    {
        return 'Async';
    }

    public function getClass(): string
    {
        return BattleTag::class;
    }

    public function getNamespace(): string
    {
        return ApiSettings::NAMESPACE;
    }
}