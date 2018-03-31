<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\CommandBus\Handler\WorldOfWarcraft;

use ApiClients\Tools\Services\Client\FetchAndIterateService;
use React\Promise\PromiseInterface;
use WyriMaps\BattleNet\CommandBus\Command\WorldOfWarcraft\MountsCommand;
use WyriMaps\BattleNet\Resource\WorldOfWarcraft\MountInterface;
use function React\Promise\resolve;

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
     * Fetch the given repository and hydrate it.
     *
     * @param  MountsCommand    $command
     * @return PromiseInterface
     */
    public function handle(MountsCommand $command): PromiseInterface
    {
        return resolve($this->fetchAndIterateService->iterate('wow/mount/', 'mounts', MountInterface::HYDRATE_CLASS));
    }
}
