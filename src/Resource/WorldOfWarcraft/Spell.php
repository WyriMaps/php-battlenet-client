<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\WorldOfWarcraft;

use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @EmptyResource("WorldOfWarcraft\EmptySpell")
 */
abstract class Spell extends AbstractResource implements SpellInterface
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
    protected $icon;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var string
     */
    protected $range;

    /**
     * @var string
     */
    protected $powerCost;

    /**
     * @var string
     */
    protected $castTime;

    /**
     * @var string
     */
    protected $cooldown;

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
    public function icon(): string
    {
        return $this->icon;
    }

    /**
     * @return string
     */
    public function description(): string
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function range(): string
    {
        return $this->range;
    }

    /**
     * @return string
     */
    public function powerCost(): string
    {
        return $this->powerCost;
    }

    /**
     * @return string
     */
    public function castTime(): string
    {
        return $this->castTime;
    }

    /**
     * @return string
     */
    public function cooldown(): string
    {
        return $this->cooldown;
    }
}
