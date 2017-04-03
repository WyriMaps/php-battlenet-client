<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\WorldOfWarcraft;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyQuest implements QuestInterface, EmptyResourceInterface
{
    /**
     * @return int
     */
    public function id() : int
    {
        return null;
    }

    /**
     * @return string
     */
    public function title() : string
    {
        return null;
    }

    /**
     * @return int
     */
    public function reqLevel() : int
    {
        return null;
    }

    /**
     * @return int
     */
    public function suggestedPartyMembers() : int
    {
        return null;
    }

    /**
     * @return string
     */
    public function category() : string
    {
        return null;
    }

    /**
     * @return int
     */
    public function level() : int
    {
        return null;
    }
}
