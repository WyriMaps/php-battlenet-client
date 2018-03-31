<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\CommandBus\Handler\WorldOfWarcraft;

use ApiClients\Tools\Services\Client\FetchAndIterateService;
use React\Promise\PromiseInterface;
use WyriMaps\BattleNet\CommandBus\Command\WorldOfWarcraft\PetTypesCommand;
use WyriMaps\BattleNet\Resource\WorldOfWarcraft\CharacterAchievementInterface;
use function React\Promise\resolve;

final class CharacterAchievementsHandler
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
     * @param  PetTypesCommand  $command
     * @return PromiseInterface
     */
    public function handle(PetTypesCommand $command): PromiseInterface
    {
        return resolve(
            $this->fetchAndIterateService->iterate(
                'wow/data/character/achievments',
                'petTypes',
                CharacterAchievementInterface::HYDRATE_CLASS
            )
        );
    }
}
