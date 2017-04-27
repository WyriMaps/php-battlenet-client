<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\WorldOfWarcraft;

use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @EmptyResource("WorldOfWarcraft\EmptyQuest")
 */
abstract class Quest extends AbstractResource implements QuestInterface
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
     * @var int
     */
    protected $reqLevel;

    /**
     * @var int
     */
    protected $suggestedPartyMembers;

    /**
     * @var string
     */
    protected $category;

    /**
     * @var int
     */
    protected $level;

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
     * @return int
     */
    public function reqLevel() : int
    {
        return $this->reqLevel;
    }

    /**
     * @return int
     */
    public function suggestedPartyMembers() : int
    {
        return $this->suggestedPartyMembers;
    }

    /**
     * @return string
     */
    public function category() : string
    {
        return $this->category;
    }

    /**
     * @return int
     */
    public function level() : int
    {
        return $this->level;
    }
}
