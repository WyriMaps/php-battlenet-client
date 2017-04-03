<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\WorldOfWarcraft;

use ApiClients\Foundation\Hydrator\Annotations\EmptyResource;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @EmptyResource("WorldOfWarcraft\EmptyItemSubclass")
 */
abstract class ItemSubclass extends AbstractResource implements ItemSubclassInterface
{
    /**
     * @var int
     */
    protected $subclass;

    /**
     * @var string
     */
    protected $name;

    /**
     * @return int
     */
    public function subclass() : int
    {
        return $this->subclass;
    }

    /**
     * @return string
     */
    public function name() : string
    {
        return $this->name;
    }
}
