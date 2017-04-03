<?php declare(strict_types=1);

namespace WyriMaps\Tests\BattleNet\CommandBus\Handler\WorldOfWarcraft;

use ApiClients\Tools\Services\Client\FetchAndIterateService;
use ApiClients\Tools\TestUtilities\TestCase;
use WyriMaps\BattleNet\CommandBus\Command\WorldOfWarcraft\RealmsCommand;
use WyriMaps\BattleNet\CommandBus\Handler\WorldOfWarcraft\RealmsHandler;
use WyriMaps\BattleNet\Resource\WorldOfWarcraft\RealmInterface;

final class RealmsHandlerTest extends TestCase
{
    public function testBroadcasts()
    {
        $command = new RealmsCommand();
        $service = $this->prophesize(FetchAndIterateService::class);
        $service->handle('wow/realm/status', 'realms', RealmInterface::HYDRATE_CLASS)->shouldBeCalled();
        $handler = new RealmsHandler($service->reveal());
        $handler->handle($command);
    }
}
