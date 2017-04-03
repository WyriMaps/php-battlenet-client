<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\WorldOfWarcraft;

use ApiClients\Foundation\Resource\ResourceInterface;

interface BossInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'WorldOfWarcraft\\Boss';

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

    /**
     * @return string
     */
    public function description() : string;

    /**
     * @return int
     */
    public function zoneId() : int;

    /**
     * @return bool
     */
    public function availableInNormalMode() : bool;

    /**
     * @return bool
     */
    public function availableInHeroicMode() : bool;

    /**
     * @return int
     */
    public function heatlh() : int;

    /**
     * @return int
     */
    public function heroicHeatlh() : int;

    /**
     * @return int
     */
    public function level() : int;

    /**
     * @return int
     */
    public function heroicLevel() : int;

    /**
     * @return int
     */
    public function journalId() : int;

    /**
     * @return Npc
     */
    public function npcs() : Npc;
}
