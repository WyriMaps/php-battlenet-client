<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\WorldOfWarcraft;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyRealm implements RealmInterface, EmptyResourceInterface
{
    /**
     * @return string
     */
    public function type(): string
    {
        return null;
    }

    /**
     * @return string
     */
    public function population(): string
    {
        return null;
    }

    /**
     * @return bool
     */
    public function queue(): bool
    {
        return null;
    }

    /**
     * @return bool
     */
    public function status(): bool
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
    public function battlegroup(): string
    {
        return null;
    }

    /**
     * @return string
     */
    public function locale(): string
    {
        return null;
    }

    /**
     * @return string
     */
    public function timezone(): string
    {
        return null;
    }

    /**
     * @return array
     */
    public function connectedRealms(): array
    {
        return null;
    }
}
