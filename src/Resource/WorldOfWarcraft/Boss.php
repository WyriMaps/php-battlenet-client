<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\WorldOfWarcraft;

use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Hydrator\Annotation\Nested;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @Nested(
 *     npcs="WorldOfWarcraft\Npc"
 * )
 * @EmptyResource("WorldOfWarcraft\EmptyBoss")
 */
abstract class Boss extends AbstractResource implements BossInterface
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $urlSlug;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var int
     */
    protected $zoneId;

    /**
     * @var bool
     */
    protected $availableInNormalMode;

    /**
     * @var bool
     */
    protected $availableInHeroicMode;

    /**
     * @var int
     */
    protected $heatlh;

    /**
     * @var int
     */
    protected $heroicHeatlh;

    /**
     * @var int
     */
    protected $level;

    /**
     * @var int
     */
    protected $heroicLevel;

    /**
     * @var int
     */
    protected $journalId;

    /**
     * @var Npc
     */
    protected $npcs;

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
    public function name(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function urlSlug(): string
    {
        return $this->urlSlug;
    }

    /**
     * @return string
     */
    public function description(): string
    {
        return $this->description;
    }

    /**
     * @return int
     */
    public function zoneId(): int
    {
        return $this->zoneId;
    }

    /**
     * @return bool
     */
    public function availableInNormalMode(): bool
    {
        return $this->availableInNormalMode;
    }

    /**
     * @return bool
     */
    public function availableInHeroicMode(): bool
    {
        return $this->availableInHeroicMode;
    }

    /**
     * @return int
     */
    public function heatlh(): int
    {
        return $this->heatlh;
    }

    /**
     * @return int
     */
    public function heroicHeatlh(): int
    {
        return $this->heroicHeatlh;
    }

    /**
     * @return int
     */
    public function level(): int
    {
        return $this->level;
    }

    /**
     * @return int
     */
    public function heroicLevel(): int
    {
        return $this->heroicLevel;
    }

    /**
     * @return int
     */
    public function journalId(): int
    {
        return $this->journalId;
    }

    /**
     * @return Npc
     */
    public function npcs(): Npc
    {
        return $this->npcs;
    }
}
