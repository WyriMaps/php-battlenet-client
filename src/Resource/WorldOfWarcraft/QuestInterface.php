<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\WorldOfWarcraft;

use ApiClients\Foundation\Resource\ResourceInterface;

interface QuestInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'WorldOfWarcraft\\Quest';

    /**
     * @return int
     */
    public function id(): int;

    /**
     * @return string
     */
    public function title(): string;

    /**
     * @return int
     */
    public function reqLevel(): int;

    /**
     * @return int
     */
    public function suggestedPartyMembers(): int;

    /**
     * @return string
     */
    public function category(): string;

    /**
     * @return int
     */
    public function level(): int;
}
