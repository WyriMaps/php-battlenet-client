<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource;

use ApiClients\Foundation\Resource\ResourceInterface;

interface BattleTagInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'BattleTag';

    /**
     * @return string
     */
    public function battletag(): string;

    /**
     * @return int
     */
    public function id(): int;
}
