<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\WorldOfWarcraft;

use ApiClients\Foundation\Resource\ResourceInterface;

interface ItemSubclassInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'WorldOfWarcraft\\ItemSubclass';

    /**
     * @return int
     */
    public function subclass() : int;

    /**
     * @return string
     */
    public function name() : string;
}
