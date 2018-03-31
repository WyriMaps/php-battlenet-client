<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource;

use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @EmptyResource("EmptyBattleTag")
 */
abstract class BattleTag extends AbstractResource implements BattleTagInterface
{
    /**
     * @var string
     */
    protected $battletag;

    /**
     * @var int
     */
    protected $id;

    /**
     * @return string
     */
    public function battletag(): string
    {
        return $this->battletag;
    }

    /**
     * @return int
     */
    public function id(): int
    {
        return $this->id;
    }
}
