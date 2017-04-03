<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\WorldOfWarcraft;

use ApiClients\Foundation\Hydrator\Annotations\EmptyResource;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @EmptyResource("WorldOfWarcraft\EmptyRace")
 */
abstract class Race extends AbstractResource implements RaceInterface
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var int
     */
    protected $mask;

    /**
     * @var string
     */
    protected $side;

    /**
     * @var string
     */
    protected $name;

    /**
     * @return int
     */
    public function id() : int
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function mask() : int
    {
        return $this->mask;
    }

    /**
     * @return string
     */
    public function side() : string
    {
        return $this->side;
    }

    /**
     * @return string
     */
    public function name() : string
    {
        return $this->name;
    }
}
