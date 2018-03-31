<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\CommandBus\Handler;

use ApiClients\Tools\Services\Client\FetchAndHydrateService;
use React\Promise\PromiseInterface;
use WyriMaps\BattleNet\CommandBus\Command\WhoAmICommand;
use WyriMaps\BattleNet\Resource\BattleTagInterface;

final class WhoAmIHandler
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

    public function handle(WhoAmICommand $command): PromiseInterface
    {
        return $this->fetchAndHydrateService->fetch(
            'account/user?access_token=' . $command->getToken(),
            '',
            BattleTagInterface::HYDRATE_CLASS
        );
    }
}
