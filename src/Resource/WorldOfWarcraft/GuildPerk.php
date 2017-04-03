<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\WorldOfWarcraft;

use ApiClients\Foundation\Hydrator\Annotations\EmptyResource;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @EmptyResource("WorldOfWarcraft\EmptyGuildPerk")
 */
abstract class GuildPerk extends AbstractResource implements GuildPerkInterface
{
    /**
     * @var int
     */
    protected $guildLevel;

    /**
     * @var array
     */
    protected $spell;

    /**
     * @return int
     */
    public function guildLevel() : int
    {
        return $this->guildLevel;
    }

    /**
     * @return array
     */
    public function spell() : array
    {
        return $this->spell;
    }
}
