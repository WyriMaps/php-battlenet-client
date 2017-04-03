<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\WorldOfWarcraft;

use ApiClients\Foundation\Resource\ResourceInterface;

interface CharacterClassInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'WorldOfWarcraft\\CharacterClass';

    /**
     * @return int
     */
    public function id() : int;

    /**
     * @return int
     */
    public function mask() : int;

    /**
     * @return string
     */
    public function powerType() : string;

    /**
     * @return string
     */
    public function name() : string;
}
