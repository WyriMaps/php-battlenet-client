<?php declare(strict_types=1);

namespace WyriMaps\Tests\BattleNet\CommandBus\Handler\WorldOfWarcraft;

use ApiClients\Tools\Services\Client\FetchAndIterateService;
use ApiClients\Tools\TestUtilities\TestCase;
use WyriMaps\BattleNet\CommandBus\Command\WorldOfWarcraft\BattleGroupsCommand;
use WyriMaps\BattleNet\CommandBus\Handler\WorldOfWarcraft\BattleGroupsHandler;
use WyriMaps\BattleNet\Resource\WorldOfWarcraft\BattleGroupInterface;

final class BattleGroupsHandlerTest extends TestCase
{
    public function testBroadcasts()
    {
        $command = new BattleGroupsCommand();
        $service = $this->prophesize(FetchAndIterateService::class);
        $service->iterate('wow/data/battlegroups/', 'battlegroups', BattleGroupInterface::HYDRATE_CLASS)->shouldBeCalled();
        $handler = new BattleGroupsHandler($service->reveal());
        $handler->handle($command);
    }
}
