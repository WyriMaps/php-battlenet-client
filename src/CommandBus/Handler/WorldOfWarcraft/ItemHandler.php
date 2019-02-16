<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\CommandBus\Handler\WorldOfWarcraft;

use ApiClients\Tools\Services\Client\FetchAndHydrateService;
use React\Promise\PromiseInterface;
use WyriMaps\BattleNet\CommandBus\Command\WorldOfWarcraft\ItemCommand;
use WyriMaps\BattleNet\Resource\WorldOfWarcraft\ItemInterface;

final class ItemHandler
{
    /**
     * @var FetchAndHydrateService
     */
    private $fetchAndHydrateService;

    /**
     * @param FetchAndHydrateService $fetchAndHydrateService
     */
    public function __construct(FetchAndHydrateService $fetchAndHydrateService)
    {
        $this->fetchAndHydrateService = $fetchAndHydrateService;
    }

    public function handle(ItemCommand $command): PromiseInterface
    {
        return $this->fetchAndHydrateService->fetch(
            'wow/item/' . $command->getItemId(),
            '',
            ItemInterface::HYDRATE_CLASS
        );
    }
}
