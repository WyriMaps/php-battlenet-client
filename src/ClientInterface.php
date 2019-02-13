<?php
declare(strict_types=1);

namespace WyriMaps\BattleNet;

use ApiClients\Foundation\Factory;
use ApiClients\Foundation\Resource\ResourceInterface;
use function Clue\React\Block\await;
use React\EventLoop\Factory as EventLoopFactory;
use WyriMaps\BattleNet\Resource\BattleTagInterface;
use WyriMaps\BattleNet\WorldOfWarcraft\Client as WowClient;

interface ClientInterface
{
    /**
     * Take a string create by the extract method and hydrate it back to a resource.
     *
     * @param  string            $resource
     * @return ResourceInterface
     */
    public function hydrate(string $resource): ResourceInterface;

    /**
     * Extract a resource into a string for storage.
     *
     * @param  ResourceInterface $resource
     * @return string
     */
    public function extract(ResourceInterface $resource): string;

    public function worldOfWarcraft(): WowClient;

    /**
     * @throws \Exception
     * @return BattleTagInterface
     */
    public function whoAmI(): BattleTagInterface;
}
