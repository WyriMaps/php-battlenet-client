<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\WorldOfWarcraft;

use ApiClients\Foundation\Resource\ResourceInterface;

interface NpcInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'WorldOfWarcraft\\Npc';

    /**
     * @return int
     */
    public function id() : int;

    /**
     * @return string
     */
    public function name() : string;

    /**
     * @return string
     */
    public function urlSlug() : string;
}
