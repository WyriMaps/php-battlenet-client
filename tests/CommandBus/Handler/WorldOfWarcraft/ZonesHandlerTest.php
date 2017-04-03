<?php declare(strict_types=1);

namespace WyriMaps\Tests\BattleNet\CommandBus\Handler\WorldOfWarcraft;

use ApiClients\Tools\Services\Client\FetchAndIterateService;
use ApiClients\Tools\TestUtilities\TestCase;
use WyriMaps\BattleNet\CommandBus\Command\WorldOfWarcraft\ZonesCommand;
use WyriMaps\BattleNet\CommandBus\Handler\WorldOfWarcraft\ZonesHandler;
use WyriMaps\BattleNet\Resource\WorldOfWarcraft\ZoneInterface;

final class ZonesHandlerTest extends TestCase
{
    public function testBroadcasts()
    {
        $command = new ZonesCommand();
        $service = $this->prophesize(FetchAndIterateService::class);
        $service->iterate('wow/zone/', 'zones', ZoneInterface::HYDRATE_CLASS)->shouldBeCalled();
        $handler = new ZonesHandler($service->reveal());
        $handler->handle($command);
    }
}
