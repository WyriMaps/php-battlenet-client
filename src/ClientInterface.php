<?php
declare(strict_types=1);

namespace WyriMaps\BattleNet;

use ApiClients\Foundation\Resource\ResourceInterface;
use WyriMaps\BattleNet\Resource\BattleTagInterface;
use WyriMaps\BattleNet\WorldOfWarcraft\ClientInterface as WowClientInterface;

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

    public function worldOfWarcraft(): WowClientInterface;

    /**
     * @throws \Exception
     * @return BattleTagInterface
     */
    public function whoAmI(): BattleTagInterface;
}
