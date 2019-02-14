<?php declare(strict_types=1);

namespace WyriMaps\BattleNet;

final class Region
{
    public const DEFAULT = self::EU;

    /**
     * The default region.
     */
    public const EU = 'eu.api.blizzard.com';

    /**
     * Other regions.
     */
    public const CN = 'gateway.battlenet.com.cn';
    public const KR = 'kr.api.blizzard.com';
    public const TW = 'tw.api.blizzard.com';
    public const US = 'us.api.blizzard.com';
}
