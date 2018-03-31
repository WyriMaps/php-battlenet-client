<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\CommandBus\Command;

use WyriHaximus\Tactician\CommandHandler\Annotations\Handler;

/**
 * @Handler("WyriMaps\BattleNet\CommandBus\Handler\WhoAmIHandler")
 */
final class WhoAmICommand
{
    /**
     * @var string
     */
    private $token;

    /**
     * @param string $token
     */
    public function __construct(string $token)
    {
        $this->token = $token;
    }

    /**
     * @return string
     */
    public function getToken(): string
    {
        return $this->token;
    }
}
