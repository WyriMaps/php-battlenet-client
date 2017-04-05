<?php declare(strict_types=1);

namespace WyriMaps\Tests\BattleNet\CommandBus\Handler\WorldOfWarcraft;

use ApiClients\Tools\Services\Client\FetchAndIterateService;
use ApiClients\Tools\TestUtilities\TestCase;
use WyriMaps\BattleNet\CommandBus\Command\WorldOfWarcraft\BossesCommand;
use WyriMaps\BattleNet\CommandBus\Handler\WorldOfWarcraft\BossesHandler;
use WyriMaps\BattleNet\Resource\WorldOfWarcraft\BossInterface;

final class BossesHandlerTest extends TestCase
{
    public function testBroadcasts()
    {
        $command = new BossesCommand();
        $service = $this->prophesize(FetchAndIterateService::class);
        $service->iterate('wow/boss/', 'bosses', BossInterface::HYDRATE_CLASS)->shouldBeCalled();
        $handler = new BossesHandler($service->reveal());
        $handler->handle($command);
    }
}
