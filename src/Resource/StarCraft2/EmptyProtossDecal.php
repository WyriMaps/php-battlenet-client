<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\StarCraft2;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyProtossDecal implements ProtossDecalInterface, EmptyResourceInterface
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
    public function title(): string
    {
        return null;
    }

    /**
     * @return Icon
     */
    public function icon(): Icon
    {
        return null;
    }

    /**
     * @return int
     */
    public function achievementId(): int
    {
        return null;
    }
}
