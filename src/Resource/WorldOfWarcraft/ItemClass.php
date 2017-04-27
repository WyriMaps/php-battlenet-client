<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\WorldOfWarcraft;

use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @EmptyResource("WorldOfWarcraft\EmptyItemClass")
 */
abstract class ItemClass extends AbstractResource implements ItemClassInterface
{
    /**
     * @var int
     */
    protected $class;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var array
     */
    protected $subclasses;

    /**
     * @return int
     */
    public function class() : int
    {
        return $this->class;
    }

    /**
     * @return string
     */
    public function name() : string
    {
        return $this->name;
    }

    /**
     * @return array
     */
    public function subclasses() : array
    {
        return $this->subclasses;
    }
}
