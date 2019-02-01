<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\WorldOfWarcraft;

use function Clue\React\Block\await;
use React\EventLoop\LoopInterface;
use Rx\React\Promise;

class Client
{
    /**
     * @var LoopInterface
     */
    protected $loop;

    /**
     * @var AsyncClient
     */
    protected $asyncClient;

    /**
     * Client constructor.
     * @param LoopInterface $loop
     * @param AsyncClient   $asyncClient
     */
    public function __construct(LoopInterface $loop, AsyncClient $asyncClient)
    {
        $this->loop = $loop;
        $this->asyncClient = $asyncClient;
    }

    /**
     * List all battle groups.
     *
     * @return array
     */
    public function battleGroups(): array
    {
        return await(
            Promise::fromObservable(
                $this->asyncClient->battleGroups()->toArray()
            ),
            $this->loop
        );
    }

    /**
     * List all mounts.
     *
     * @return array
     */
    public function mounts(): array
    {
        return await(
            Promise::fromObservable(
                $this->asyncClient->mounts()->toArray()
            ),
            $this->loop
        );
    }

    /**
     * List all realms.
     *
     * @return array
     */
    public function realms(): array
    {
        return await(
            Promise::fromObservable(
                $this->asyncClient->realms()->toArray()
            ),
            $this->loop
        );
    }

    /**
     * List all pets.
     *
     * @return array
     */
    public function pets(): array
    {
        return await(
            Promise::fromObservable(
                $this->asyncClient->pets()->toArray()
            ),
            $this->loop
        );
    }

    /**
     * List all pet types.
     *
     * @return array
     */
    public function petTypes(): array
    {
        return await(
            Promise::fromObservable(
                $this->asyncClient->petTypes()->toArray()
            ),
            $this->loop
        );
    }

    /**
     * List all zones.
     *
     * @return array
     */
    public function zones(): array
    {
        return await(
            Promise::fromObservable(
                $this->asyncClient->zones()->toArray()
            ),
            $this->loop
        );
    }
}
