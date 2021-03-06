<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\CommandBus\Handler\WorldOfWarcraft;

use ApiClients\Tools\Services\Client\FetchAndIterateService;
use React\Promise\PromiseInterface;
use function React\Promise\resolve;
use WyriMaps\BattleNet\CommandBus\Command\WorldOfWarcraft\PetsCommand;
use WyriMaps\BattleNet\Resource\WorldOfWarcraft\PetInterface;

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
     * Fetch the given repository and hydrate it.
     *
     * @param  PetsCommand      $command
     * @return PromiseInterface
     */
    public function handle(PetsCommand $command): PromiseInterface
    {
        return resolve($this->fetchAndIterateService->iterate('wow/pet/', 'pets', PetInterface::HYDRATE_CLASS));
    }
}
