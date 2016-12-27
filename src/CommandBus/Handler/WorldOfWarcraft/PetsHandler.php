<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\CommandBus\Handler\WorldOfWarcraft;

use ApiClients\Tools\Services\Client\FetchAndIterateService;
use React\Promise\PromiseInterface;
use Rx\Observable;
use WyriMaps\BattleNet\CommandBus\Command\WorldOfWarcraft\PetsCommand;
use function React\Promise\resolve;
use function WyriHaximus\React\futureFunctionPromise;

final class PetsHandler
{
    /**
     * @var FetchAndIterateService
     */
    private $fetchAndIterateService;

    /**
     * @param FetchAndIterateService $fetchAndIterateService
     */
    public function __construct(FetchAndIterateService $fetchAndIterateService)
    {
        $this->fetchAndIterateService = $fetchAndIterateService;
    }

    /**
     * Fetch the given repository and hydrate it
     *
     * @param PetsCommand $command
     * @return PromiseInterface
     */
    public function handle(PetsCommand $command): PromiseInterface
    {
        return $this->fetchAndIterateService->handle('wow/pet/', 'pets', 'WorldOfWarcraft\Pet');
    }
}
