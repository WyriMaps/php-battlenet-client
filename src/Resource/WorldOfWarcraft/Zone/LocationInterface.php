<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\WorldOfWarcraft\Zone;

use ApiClients\Foundation\Resource\ResourceInterface;

interface LocationInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'WorldOfWarcraft\\Zone\\Location';

    /**
     * @return int
     */
    public function id(): int;

    /**
     * @return string
     */
    public function name(): string;
}
