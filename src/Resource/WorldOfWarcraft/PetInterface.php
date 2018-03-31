<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\WorldOfWarcraft;

use ApiClients\Foundation\Resource\ResourceInterface;

interface PetInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'WorldOfWarcraft\\Pet';

    /**
     * @return bool
     */
    public function canBattle(): bool;

    /**
     * @return int
     */
    public function creatureId(): int;

    /**
     * @return string
     */
    public function name(): string;

    /**
     * @return string
     */
    public function family(): string;

    /**
     * @return string
     */
    public function icon(): string;

    /**
     * @return int
     */
    public function qualityId(): int;

    /**
     * @return array
     */
    public function stats(): array;

    /**
     * @return array
     */
    public function strongAgainst(): array;

    /**
     * @return int
     */
    public function typeId(): int;

    /**
     * @return array
     */
    public function weakAgainst(): array;
}
