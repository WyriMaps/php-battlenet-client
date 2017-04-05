<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\CommandBus\Handler\WorldOfWarcraft;

use ApiClients\Tools\Services\Client\FetchAndIterateService;
use React\Promise\PromiseInterface;
use function React\Promise\resolve;
use WyriMaps\BattleNet\CommandBus\Command\WorldOfWarcraft\BattleGroupsCommand;
use WyriMaps\BattleNet\CommandBus\Command\WorldOfWarcraft\BossesCommand;
use WyriMaps\BattleNet\Resource\WorldOfWarcraft\BattleGroupInterface;
use WyriMaps\BattleNet\Resource\WorldOfWarcraft\BossInterface;

final class BossesHandler
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
     * @param BossesCommand $command
     * @return PromiseInterface
     */
    public function handle(BossesCommand $command): PromiseInterface
    {
        return resolve($this->fetchAndIterateService->iterate(
            'wow/boss/',
            'bosses',
            BossInterface::HYDRATE_CLASS
        ));
    }
}
