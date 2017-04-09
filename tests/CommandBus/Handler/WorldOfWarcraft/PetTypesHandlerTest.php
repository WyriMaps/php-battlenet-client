<?php declare(strict_types=1);

namespace WyriMaps\Tests\BattleNet\CommandBus\Handler\WorldOfWarcraft;

use ApiClients\Tools\Services\Client\FetchAndIterateService;
use ApiClients\Tools\TestUtilities\TestCase;
use WyriMaps\BattleNet\CommandBus\Command\WorldOfWarcraft\PetTypesCommand;
use WyriMaps\BattleNet\CommandBus\Handler\WorldOfWarcraft\PetTypesHandler;
use WyriMaps\BattleNet\Resource\WorldOfWarcraft\PetTypeInterface;

final class PetTypesHandlerTest extends TestCase
{
    public function testBroadcasts()
    {
        $command = new PetTypesCommand();
        $service = $this->prophesize(FetchAndIterateService::class);
        $service->iterate('wow/data/pet/types', 'petTypes', PetTypeInterface::HYDRATE_CLASS)->shouldBeCalled();
        $handler = new PetTypesHandler($service->reveal());
        $handler->handle($command);
    }
}
