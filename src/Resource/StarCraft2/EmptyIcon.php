<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\StarCraft2;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyIcon implements IconInterface, EmptyResourceInterface
{
    /**
     * @return int
     */
    public function x() : int
    {
        return null;
    }

    /**
     * @return int
     */
    public function y() : int
    {
        return null;
    }

    /**
     * @return int
     */
    public function w() : int
    {
        return null;
    }

    /**
     * @return int
     */
    public function h() : int
    {
        return null;
    }

    /**
     * @return int
     */
    public function offset() : int
    {
        return null;
    }

    /**
     * @return string
     */
    public function url() : string
    {
        return null;
    }
}
