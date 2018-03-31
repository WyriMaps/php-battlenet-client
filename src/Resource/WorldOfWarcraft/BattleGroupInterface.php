<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\WorldOfWarcraft;

use ApiClients\Foundation\Resource\ResourceInterface;

interface BattleGroupInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'WorldOfWarcraft\\BattleGroup';

    /**
     * @return string
     */
    public function name(): string;

    /**
     * @return string
     */
    public function slug(): string;
}
