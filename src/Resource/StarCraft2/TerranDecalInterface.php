<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\StarCraft2;

use ApiClients\Foundation\Resource\ResourceInterface;

interface TerranDecalInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'StarCraft2\\TerranDecal';

    /**
     * @return int
     */
    public function id(): int;

    /**
     * @return string
     */
    public function title(): string;

    /**
     * @return Icon
     */
    public function icon(): Icon;

    /**
     * @return int
     */
    public function achievementId(): int;
}
