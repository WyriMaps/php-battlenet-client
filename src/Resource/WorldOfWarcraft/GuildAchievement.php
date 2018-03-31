<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\WorldOfWarcraft;

use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @EmptyResource("WorldOfWarcraft\EmptyGuildAchievement")
 */
abstract class GuildAchievement extends AbstractResource implements GuildAchievementInterface
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var int
     */
    protected $points;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var array
     */
    protected $rewardItems;

    /**
     * @var string
     */
    protected $icon;

    /**
     * @var array
     */
    protected $criteria;

    /**
     * @var bool
     */
    protected $accountWide;

    /**
     * @var int
     */
    protected $factionId;

    /**
     * @return int
     */
    public function id(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function title(): string
    {
        return $this->title;
    }

    /**
     * @return int
     */
    public function points(): int
    {
        return $this->points;
    }

    /**
     * @return string
     */
    public function description(): string
    {
        return $this->description;
    }

    /**
     * @return array
     */
    public function rewardItems(): array
    {
        return $this->rewardItems;
    }

    /**
     * @return string
     */
    public function icon(): string
    {
        return $this->icon;
    }

    /**
     * @return array
     */
    public function criteria(): array
    {
        return $this->criteria;
    }

    /**
     * @return bool
     */
    public function accountWide(): bool
    {
        return $this->accountWide;
    }

    /**
     * @return int
     */
    public function factionId(): int
    {
        return $this->factionId;
    }
}
