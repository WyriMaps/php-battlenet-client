<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\WorldOfWarcraft;

use ApiClients\Foundation\Hydrator\Annotations\EmptyResource;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @EmptyResource("WorldOfWarcraft\EmptyCharacterClass")
 */
abstract class CharacterClass extends AbstractResource implements CharacterClassInterface
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
    protected $powerType;

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
    public function powerType() : string
    {
        return $this->powerType;
    }

    /**
     * @return string
     */
    public function name() : string
    {
        return $this->name;
    }
}
