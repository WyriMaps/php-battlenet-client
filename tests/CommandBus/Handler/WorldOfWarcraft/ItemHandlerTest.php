<?php declare(strict_types=1);

namespace WyriMaps\Tests\BattleNet\CommandBus\Handler\WorldOfWarcraft;

use ApiClients\Tools\Services\Client\FetchAndHydrateService;
use ApiClients\Tools\TestUtilities\TestCase;
use WyriMaps\BattleNet\CommandBus\Command\WorldOfWarcraft\ItemCommand;
use WyriMaps\BattleNet\CommandBus\Handler\WorldOfWarcraft\ItemHandler;
use WyriMaps\BattleNet\Resource\WorldOfWarcraft\ItemInterface;

final class ItemHandlerTest extends TestCase
{
    public function testBroadcasts()
    {
        $command = new ItemCommand(123);
        $service = $this->prophesize(FetchAndHydrateService::class);
        $service->fetch('wow/item/123', '', ItemInterface::HYDRATE_CLASS)->shouldBeCalled();
        $handler = new ItemHandler($service->reveal());
        $handler->handle($command);
    }
}
