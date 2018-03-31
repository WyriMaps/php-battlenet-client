<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\WorldOfWarcraft;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptySpell implements SpellInterface, EmptyResourceInterface
{
    /**
     * @return int
     */
    public function id(): int
    {
        return null;
    }

    /**
     * @return string
     */
    public function name(): string
    {
        return null;
    }

    /**
     * @return string
     */
    public function icon(): string
    {
        return null;
    }

    /**
     * @return string
     */
    public function description(): string
    {
        return null;
    }

    /**
     * @return string
     */
    public function range(): string
    {
        return null;
    }

    /**
     * @return string
     */
    public function powerCost(): string
    {
        return null;
    }

    /**
     * @return string
     */
    public function castTime(): string
    {
        return null;
    }

    /**
     * @return string
     */
    public function cooldown(): string
    {
        return null;
    }
}
