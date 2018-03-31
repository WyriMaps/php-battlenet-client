<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\StarCraft2;

use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @EmptyResource("StarCraft2\EmptyIcon")
 */
abstract class Icon extends AbstractResource implements IconInterface
{
    /**
     * @var int
     */
    protected $x;

    /**
     * @var int
     */
    protected $y;

    /**
     * @var int
     */
    protected $w;

    /**
     * @var int
     */
    protected $h;

    /**
     * @var int
     */
    protected $offset;

    /**
     * @var string
     */
    protected $url;

    /**
     * @return int
     */
    public function x(): int
    {
        return $this->x;
    }

    /**
     * @return int
     */
    public function y(): int
    {
        return $this->y;
    }

    /**
     * @return int
     */
    public function w(): int
    {
        return $this->w;
    }

    /**
     * @return int
     */
    public function h(): int
    {
        return $this->h;
    }

    /**
     * @return int
     */
    public function offset(): int
    {
        return $this->offset;
    }

    /**
     * @return string
     */
    public function url(): string
    {
        return $this->url;
    }
}
