<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\WorldOfWarcraft;

use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @EmptyResource("WorldOfWarcraft\EmptyRealm")
 */
abstract class Realm extends AbstractResource implements RealmInterface
{
    /**
     * @var string
     */
    protected $type;

    /**
     * @var string
     */
    protected $population;

    /**
     * @var bool
     */
    protected $queue;

    /**
     * @var bool
     */
    protected $status;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $battlegroup;

    /**
     * @var string
     */
    protected $locale;

    /**
     * @var string
     */
    protected $timezone;

    /**
     * @var array
     */
    protected $connected_realms;

    /**
     * @return string
     */
    public function type() : string
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function population() : string
    {
        return $this->population;
    }

    /**
     * @return bool
     */
    public function queue() : bool
    {
        return $this->queue;
    }

    /**
     * @return bool
     */
    public function status() : bool
    {
        return $this->status;
    }

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
    public function battlegroup() : string
    {
        return $this->battlegroup;
    }

    /**
     * @return string
     */
    public function locale() : string
    {
        return $this->locale;
    }

    /**
     * @return string
     */
    public function timezone() : string
    {
        return $this->timezone;
    }

    /**
     * @return array
     */
    public function connectedRealms() : array
    {
        return $this->connected_realms;
    }
}
