<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\CommandBus\Handler\WorldOfWarcraft;

use ApiClients\Tools\Services\Client\FetchAndIterateService;
use React\Promise\PromiseInterface;
use function React\Promise\resolve;
use WyriMaps\BattleNet\CommandBus\Command\WorldOfWarcraft\BattleGroupsCommand;
use WyriMaps\BattleNet\Resource\WorldOfWarcraft\BattleGroupInterface;

final class BattleGroupsHandler
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
     * @param  BattleGroupsCommand $command
     * @return PromiseInterface
     */
    public function handle(BattleGroupsCommand $command): PromiseInterface
    {
        return resolve($this->fetchAndIterateService->iterate(
            'wow/data/battlegroups/',
            'battlegroups',
            BattleGroupInterface::HYDRATE_CLASS
        ));
    }
}
