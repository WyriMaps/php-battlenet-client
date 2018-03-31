<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\WorldOfWarcraft;

use ApiClients\Foundation\Resource\ResourceInterface;

interface GuildAchievementInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'WorldOfWarcraft\\GuildAchievement';

    /**
     * @return int
     */
    public function id(): int;

    /**
     * @return string
     */
    public function title(): string;

    /**
     * @return int
     */
    public function points(): int;

    /**
     * @return string
     */
    public function description(): string;

    /**
     * @return array
     */
    public function rewardItems(): array;

    /**
     * @return string
     */
    public function icon(): string;

    /**
     * @return array
     */
    public function criteria(): array;

    /**
     * @return bool
     */
    public function accountWide(): bool;

    /**
     * @return int
     */
    public function factionId(): int;
}
