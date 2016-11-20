<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\WorldOfWarcraft;

use ApiClients\Foundation\Resource\ResourceInterface;

interface MountInterface extends ResourceInterface
{
    /**
     * @return string
     */
    public function name() : string;

    /**
     * @return int
     */
    public function spellId() : int;

    /**
     * @return int
     */
    public function creatureId() : int;

    /**
     * @return int
     */
    public function itemId() : int;

    /**
     * @return int
     */
    public function qualityId() : int;

    /**
     * @return string
     */
    public function icon() : string;

    /**
     * @return bool
     */
    public function isGround() : bool;

    /**
     * @return bool
     */
    public function isFlying() : bool;

    /**
     * @return bool
     */
    public function isAquatic() : bool;

    /**
     * @return bool
     */
    public function isJumping() : bool;
}
