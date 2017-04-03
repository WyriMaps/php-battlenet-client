<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\StarCraft2;

use ApiClients\Foundation\Hydrator\Annotations\EmptyResource;
use ApiClients\Foundation\Hydrator\Annotations\Nested;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @Nested(
 *     icon="StarCraft2\Icon"
 * )
 * @EmptyResource("StarCraft2\EmptyTerranDecal")
 */
abstract class TerranDecal extends AbstractResource implements TerranDecalInterface
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var Icon
     */
    protected $icon;

    /**
     * @var int
     */
    protected $achievementId;

    /**
     * @return int
     */
    public function id() : int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function title() : string
    {
        return $this->title;
    }

    /**
     * @return Icon
     */
    public function icon() : Icon
    {
        return $this->icon;
    }

    /**
     * @return int
     */
    public function achievementId() : int
    {
        return $this->achievementId;
    }
}
