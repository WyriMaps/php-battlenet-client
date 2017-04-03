<?php declare(strict_types=1);

namespace WyriMaps\Tests\BattleNet\CommandBus\Handler\WorldOfWarcraft;

use ApiClients\Tools\Services\Client\FetchAndIterateService;
use ApiClients\Tools\TestUtilities\TestCase;
use WyriMaps\BattleNet\CommandBus\Command\WorldOfWarcraft\MountsCommand;
use WyriMaps\BattleNet\CommandBus\Handler\WorldOfWarcraft\MountsHandler;
use WyriMaps\BattleNet\Resource\WorldOfWarcraft\MountInterface;

final class MountsHandlerTest extends TestCase
{
    public function testBroadcasts()
    {
        $command = new MountsCommand();
        $service = $this->prophesize(FetchAndIterateService::class);
        $service->iterate('wow/mount/', 'mounts', MountInterface::HYDRATE_CLASS)->shouldBeCalled();
        $handler = new MountsHandler($service->reveal());
        $handler->handle($command);
    }
}
