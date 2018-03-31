<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\WorldOfWarcraft;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyCharacterClass implements CharacterClassInterface, EmptyResourceInterface
{
    /**
     * @return int
     */
    public function id(): int
    {
        return null;
    }

    /**
     * @return int
     */
    public function mask(): int
    {
        return null;
    }

    /**
     * @return string
     */
    public function powerType(): string
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
}
