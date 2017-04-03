<?php declare(strict_types=1);

namespace WyriMaps\Tests\BattleNet\Resource\Async\WorldOfWarcraft;

use ApiClients\Tools\ResourceTestUtilities\AbstractResourceTest;
use WyriMaps\BattleNet\ApiSettings;
use WyriMaps\BattleNet\Resource\WorldOfWarcraft\Mount;

class MountTest extends AbstractResourceTest
{
    public function getSyncAsync() : string
    {
        return 'Async';
    }
    public function getClass() : string
    {
        return Mount::class;
    }
    public function getNamespace() : string
    {
        return Apisettings::NAMESPACE;
    }
}
