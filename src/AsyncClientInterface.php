<?php declare(strict_types=1);

namespace WyriMaps\BattleNet;

use ApiClients\Foundation\Client;
use ApiClients\Foundation\Factory;
use ApiClients\Foundation\Resource\ResourceInterface;
use React\EventLoop\LoopInterface;
use React\Promise\CancellablePromiseInterface;
use React\Promise\PromiseInterface;
use WyriMaps\BattleNet\CommandBus\Command\WhoAmICommand;
use WyriMaps\BattleNet\WorldOfWarcraft\AsyncClient as WowClient;

interface AsyncClientInterface
{
    /**
     * Take a string create by the extract method and hydrate it back to a resource.
     *
     * @param  string                      $resource
     * @return CancellablePromiseInterface
     */
    public function hydrate(string $resource): CancellablePromiseInterface;

    /**
     * Extract a resource into a string for storage.
     *
     * @param  ResourceInterface           $resource
     * @return CancellablePromiseInterface
     */
    public function extract(ResourceInterface $resource): CancellablePromiseInterface;

    public function worldOfWarcraft(): WowClient;

    public function whoAmI(string $token): PromiseInterface;
}
