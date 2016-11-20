<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\WorldOfWarcraft;

use ApiClients\Foundation\Resource\ResourceInterface;

interface RealmInterface extends ResourceInterface
{
    /**
     * @return string
     */
    public function type() : string;

    /**
     * @return string
     */
    public function population() : string;

    /**
     * @return bool
     */
    public function queue() : bool;

    /**
     * @return bool
     */
    public function status() : bool;

    /**
     * @return string
     */
    public function name() : string;

    /**
     * @return string
     */
    public function battlegroup() : string;

    /**
     * @return string
     */
    public function locale() : string;

    /**
     * @return string
     */
    public function timezone() : string;

    /**
     * @return array
     */
    public function connectedRealms() : array;
}
