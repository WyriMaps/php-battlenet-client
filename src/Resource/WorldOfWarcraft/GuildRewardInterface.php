<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\WorldOfWarcraft;

use ApiClients\Foundation\Resource\ResourceInterface;

interface GuildRewardInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'WorldOfWarcraft\\GuildReward';

    /**
     * @return int
     */
    public function minGuildLevel(): int;

    /**
     * @return int
     */
    public function minGuildRepLevel(): int;

    /**
     * @return array
     */
    public function achievement(): array;

    /**
     * @return array
     */
    public function item(): array;
}
