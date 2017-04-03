<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\WorldOfWarcraft;

use ApiClients\Foundation\Hydrator\Annotations\EmptyResource;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @EmptyResource("WorldOfWarcraft\EmptyBattleGroup")
 */
abstract class BattleGroup extends AbstractResource implements BattleGroupInterface
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $slug;

    /**
     * @return string
     */
    public function name() : string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function slug() : string
    {
        return $this->slug;
    }
}
