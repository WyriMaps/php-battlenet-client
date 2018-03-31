<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\WorldOfWarcraft;

use ApiClients\Foundation\Resource\ResourceInterface;

interface GuildAchievementCategoryInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'WorldOfWarcraft\\GuildAchievementCategory';

    /**
     * @return int
     */
    public function id(): int;

    /**
     * @return string
     */
    public function name(): string;

    /**
     * @return array
     */
    public function achievements(): array;
}
