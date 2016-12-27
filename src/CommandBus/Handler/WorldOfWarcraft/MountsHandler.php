<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\CommandBus\Handler\WorldOfWarcraft;

use ApiClients\Tools\Services\Client\FetchAndIterateService;
use React\Promise\PromiseInterface;
use Rx\Observable;
use WyriMaps\BattleNet\CommandBus\Command\WorldOfWarcraft\MountsCommand;
use function React\Promise\resolve;
use function WyriHaximus\React\futureFunctionPromise;

final class MountsHandler
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
     * @param MountsCommand $command
     * @return PromiseInterface
     */
    public function handle(MountsCommand $command): PromiseInterface
    {
        return $this->fetchAndIterateService->handle('wow/mount/', 'mounts', 'WorldOfWarcraft\Mount');
    }
}
