<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\WorldOfWarcraft;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyBoss implements BossInterface, EmptyResourceInterface
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
    public function urlSlug(): string
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
     * @return int
     */
    public function zoneId(): int
    {
        return null;
    }

    /**
     * @return bool
     */
    public function availableInNormalMode(): bool
    {
        return null;
    }

    /**
     * @return bool
     */
    public function availableInHeroicMode(): bool
    {
        return null;
    }

    /**
     * @return int
     */
    public function heatlh(): int
    {
        return null;
    }

    /**
     * @return int
     */
    public function heroicHeatlh(): int
    {
        return null;
    }

    /**
     * @return int
     */
    public function level(): int
    {
        return null;
    }

    /**
     * @return int
     */
    public function heroicLevel(): int
    {
        return null;
    }

    /**
     * @return int
     */
    public function journalId(): int
    {
        return null;
    }

    /**
     * @return Npc
     */
    public function npcs(): Npc
    {
        return null;
    }
}
