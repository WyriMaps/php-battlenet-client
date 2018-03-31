<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\WorldOfWarcraft;

use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @EmptyResource("WorldOfWarcraft\EmptyPetType")
 */
abstract class PetType extends AbstractResource implements PetTypeInterface
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $key;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var int
     */
    protected $typeAbilityId;

    /**
     * @var int
     */
    protected $strongAgainstId;

    /**
     * @var int
     */
    protected $weakAgainstId;

    /**
     * @return int
     */
    public function id(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function key(): string
    {
        return $this->key;
    }

    /**
     * @return string
     */
    public function name(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function typeAbilityId(): int
    {
        return $this->typeAbilityId;
    }

    /**
     * @return int
     */
    public function strongAgainstId(): int
    {
        return $this->strongAgainstId;
    }

    /**
     * @return int
     */
    public function weakAgainstId(): int
    {
        return $this->weakAgainstId;
    }
}
