<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\WorldOfWarcraft;

use ApiClients\Foundation\Resource\ResourceInterface;

interface CharacterAchievementInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'WorldOfWarcraft\\CharacterAchievement';

    /**
     * @return int
     */
    public function id() : int;

    /**
     * @return string
     */
    public function title() : string;

    /**
     * @return int
     */
    public function points() : int;

    /**
     * @return string
     */
    public function description() : string;

    /**
     * @return string
     */
    public function reward() : string;

    /**
     * @return array
     */
    public function rewardItems() : array;

    /**
     * @return string
     */
    public function icon() : string;

    /**
     * @return array
     */
    public function criteria() : array;

    /**
     * @return bool
     */
    public function accountWide() : bool;

    /**
     * @return int
     */
    public function factionId() : int;
}
