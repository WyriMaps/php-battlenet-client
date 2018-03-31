<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\WorldOfWarcraft;

use ApiClients\Foundation\Resource\ResourceInterface;

interface SpellInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'WorldOfWarcraft\\Spell';

    /**
     * @return int
     */
    public function id(): int;

    /**
     * @return string
     */
    public function name(): string;

    /**
     * @return string
     */
    public function icon(): string;

    /**
     * @return string
     */
    public function description(): string;

    /**
     * @return string
     */
    public function range(): string;

    /**
     * @return string
     */
    public function powerCost(): string;

    /**
     * @return string
     */
    public function castTime(): string;

    /**
     * @return string
     */
    public function cooldown(): string;
}
