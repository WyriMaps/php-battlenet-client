<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\WorldOfWarcraft;

use ApiClients\Foundation\Resource\ResourceInterface;

interface ItemClassInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'WorldOfWarcraft\\ItemClass';

    /**
     * @return int
     */
    public function class(): int;

    /**
     * @return string
     */
    public function name(): string;

    /**
     * @return array
     */
    public function subclasses(): array;
}
