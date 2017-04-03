<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\WorldOfWarcraft;

use ApiClients\Foundation\Resource\ResourceInterface;

interface PetTypeInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'WorldOfWarcraft\\PetType';

    /**
     * @return int
     */
    public function id() : int;

    /**
     * @return string
     */
    public function key() : string;

    /**
     * @return string
     */
    public function name() : string;

    /**
     * @return int
     */
    public function typeAbilityId() : int;

    /**
     * @return int
     */
    public function strongAgainstId() : int;

    /**
     * @return int
     */
    public function weakAgainstId() : int;
}
