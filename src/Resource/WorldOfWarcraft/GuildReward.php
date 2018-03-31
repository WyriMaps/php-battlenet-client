<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\WorldOfWarcraft;

use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @EmptyResource("WorldOfWarcraft\EmptyGuildReward")
 */
abstract class GuildReward extends AbstractResource implements GuildRewardInterface
{
    /**
     * @var int
     */
    protected $minGuildLevel;

    /**
     * @var int
     */
    protected $minGuildRepLevel;

    /**
     * @var array
     */
    protected $achievement;

    /**
     * @var array
     */
    protected $item;

    /**
     * @return int
     */
    public function minGuildLevel(): int
    {
        return $this->minGuildLevel;
    }

    /**
     * @return int
     */
    public function minGuildRepLevel(): int
    {
        return $this->minGuildRepLevel;
    }

    /**
     * @return array
     */
    public function achievement(): array
    {
        return $this->achievement;
    }

    /**
     * @return array
     */
    public function item(): array
    {
        return $this->item;
    }
}
