<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\Sync\WorldOfWarcraft;

use WyriMaps\BattleNet\Resource\WorldOfWarcraft\Recipe as BaseRecipe;

class Recipe extends BaseRecipe
{
    public function refresh() : Recipe
    {
        return $this->wait($this->callAsync('refresh'));
    }
}
