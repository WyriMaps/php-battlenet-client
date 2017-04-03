<?php declare(strict_types=1);

namespace WyriMaps\Tests\BattleNet\CommandBus\Handler\WorldOfWarcraft;

use ApiClients\Tools\Services\Client\FetchAndIterateService;
use ApiClients\Tools\TestUtilities\TestCase;
use WyriMaps\BattleNet\CommandBus\Command\WorldOfWarcraft\PetsCommand;
use WyriMaps\BattleNet\CommandBus\Handler\WorldOfWarcraft\PetsHandler;
use WyriMaps\BattleNet\Resource\WorldOfWarcraft\PetInterface;

final class PetsHandlerTest extends TestCase
{
    public function testBroadcasts()
    {
        $command = new PetsCommand();
        $service = $this->prophesize(FetchAndIterateService::class);
        $service->iterate('wow/pet/', 'pets', PetInterface::HYDRATE_CLASS)->shouldBeCalled();
        $handler = new PetsHandler($service->reveal());
        $handler->handle($command);
    }
}
