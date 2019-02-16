<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\CommandBus\Command\WorldOfWarcraft;

use WyriHaximus\Tactician\CommandHandler\Annotations\Handler;

/**
 * @Handler("WyriMaps\BattleNet\CommandBus\Handler\WorldOfWarcraft\ItemHandler")
 */
final class ItemCommand
{
    /** @var int */
    private $itemId;

    /**
     * @param int $itemId
     */
    public function __construct(int $itemId)
    {
        $this->itemId = $itemId;
    }

    /**
     * @return int
     */
    public function getItemId(): int
    {
        return $this->itemId;
    }
}
