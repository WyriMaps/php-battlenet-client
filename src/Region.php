<?php declare(strict_types=1);

namespace WyriMaps\BattleNet;

final class Region
{
    public const DEFAULT = self::EU;

    public const MAPPING = [
        self::EU => self::EU_C,
        self::CN => self::CN_C,
        self::KR => self::KR_C,
        self::TW => self::TW_C,
        self::US => self::US_C,
    ];
    public const EU= 'eu';
    public const CN= 'cn';
    public const KR= 'kr';
    public const TW= 'tw';
    public const US= 'us';

    /**
     * Europe.
     *
     * The default region.
     */
    private const EU_C = [
        'slug' => self::EU,
        'host' => self::EU_HOST,
        'oauth_host' => self::EU_OAUTH_HOST,
    ];
    private const EU_HOST = 'eu.api.blizzard.com';
    private const EU_OAUTH_HOST = 'eu.battle.net';

    /**
     * China.
     */
    private const CN_C = [
        'slug' => self::CN,
        'host' => self::CN_HOST,
        'oauth_host' => self::CN_OAUTH_HOST,
    ];
    private const CN_HOST = 'gateway.battlenet.com.cn';
    private const CN_OAUTH_HOST = 'www.battlenet.com.cn';

    /**
     * Korea.
     */
    private const KR_C = [
        'slug' => self::KR,
        'host' => self::KR_HOST,
        'oauth_host' => self::KR_OAUTH_HOST,
    ];
    private const KR_HOST = 'kr.api.blizzard.com';
    private const KR_OAUTH_HOST = 'kr.battle.net';

    /**
     * Taiwan.
     */
    private const TW_C = [
        'slug' => self::TW,
        'host' => self::TW_HOST,
        'oauth_host' => self::TW_OAUTH_HOST,
    ];
    private const TW_HOST = 'tw.api.blizzard.com';
    private const TW_OAUTH_HOST = 'tw.battle.net';

    /**
     * Americana's.
     */
    private const US_C = [
        'slug' => self::US,
        'host' => self::US_HOST,
        'oauth_host' => self::US_OAUTH_HOST,
    ];
    private const US_HOST = 'us.api.blizzard.com';
    private const US_OAUTH_HOST = 'us.battle.net';
}
