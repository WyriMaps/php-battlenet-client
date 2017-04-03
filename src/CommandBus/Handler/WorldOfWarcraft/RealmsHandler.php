<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\CommandBus\Handler\WorldOfWarcraft;

use ApiClients\Tools\Services\Client\FetchAndIterateService;
use React\Promise\PromiseInterface;
use Rx\Observable;
use WyriMaps\BattleNet\CommandBus\Command\WorldOfWarcraft\PetsCommand;
use function React\Promise\resolve;
use function WyriHaximus\React\futureFunctionPromise;
use WyriMaps\BattleNet\CommandBus\Command\WorldOfWarcraft\RealmsCommand;
use WyriMaps\BattleNet\Resource\WorldOfWarcraft\RealmInterface;

final class RealmsHandler
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
     * @param RealmsCommand $command
     * @return PromiseInterface
     */
    public function handle(RealmsCommand $command): PromiseInterface
    {
        return resolve(
            $this->fetchAndIterateService->iterate('wow/realm/status', 'realms', RealmInterface::HYDRATE_CLASS)
        );
    }
}
