<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\StarCraft2;

use ApiClients\Foundation\Resource\ResourceInterface;

interface IconInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'StarCraft2\\Icon';

    /**
     * @return int
     */
    public function x(): int;

    /**
     * @return int
     */
    public function y(): int;

    /**
     * @return int
     */
    public function w(): int;

    /**
     * @return int
     */
    public function h(): int;

    /**
     * @return int
     */
    public function offset(): int;

    /**
     * @return string
     */
    public function url(): string;
}
