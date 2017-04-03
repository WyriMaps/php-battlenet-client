<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\WorldOfWarcraft;

use ApiClients\Foundation\Resource\ResourceInterface;

interface RecipeInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'WorldOfWarcraft\\Recipe';

    /**
     * @return int
     */
    public function id() : int;

    /**
     * @return string
     */
    public function name() : string;

    /**
     * @return string
     */
    public function profession() : string;

    /**
     * @return string
     */
    public function icon() : string;
}
