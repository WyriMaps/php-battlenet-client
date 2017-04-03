<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\WorldOfWarcraft;

use ApiClients\Foundation\Hydrator\Annotations\EmptyResource;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @EmptyResource("WorldOfWarcraft\EmptyItem")
 */
abstract class Item extends AbstractResource implements ItemInterface
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $icon;

    /**
     * @var int
     */
    protected $stackable;

    /**
     * @var int
     */
    protected $itemBind;

    /**
     * @var array
     */
    protected $bonusStats;

    /**
     * @var array
     */
    protected $itemSpells;

    /**
     * @var int
     */
    protected $buyPrice;

    /**
     * @var int
     */
    protected $itemClass;

    /**
     * @var int
     */
    protected $itemSubClass;

    /**
     * @var int
     */
    protected $containerSlots;

    /**
     * @var int
     */
    protected $inventoryType;

    /**
     * @var bool
     */
    protected $equippable;

    /**
     * @var int
     */
    protected $itemLevel;

    /**
     * @var int
     */
    protected $maxCount;

    /**
     * @var int
     */
    protected $maxDurability;

    /**
     * @var int
     */
    protected $minFactionId;

    /**
     * @var int
     */
    protected $minReputation;

    /**
     * @var int
     */
    protected $quality;

    /**
     * @var int
     */
    protected $sellPrice;

    /**
     * @var int
     */
    protected $requiredSkill;

    /**
     * @var array
     */
    protected $requiredAbility;

    /**
     * @var int
     */
    protected $requiredLevel;

    /**
     * @var int
     */
    protected $requiredSkillRank;

    /**
     * @var array
     */
    protected $itemSource;

    /**
     * @var int
     */
    protected $baseArmor;

    /**
     * @var bool
     */
    protected $hasSockets;

    /**
     * @var bool
     */
    protected $isAuctionable;

    /**
     * @var int
     */
    protected $armor;

    /**
     * @var int
     */
    protected $displayInfoId;

    /**
     * @var string
     */
    protected $nameDescription;

    /**
     * @var string
     */
    protected $nameDescriptionColor;

    /**
     * @var bool
     */
    protected $upgradable;

    /**
     * @var bool
     */
    protected $heroicTooltip;

    /**
     * @var string
     */
    protected $context;

    /**
     * @var array
     */
    protected $bonusLists;

    /**
     * @var array
     */
    protected $availableContexts;

    /**
     * @var array
     */
    protected $bonusSummary;

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
    public function description() : string
    {
        return $this->description;
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
    public function icon() : string
    {
        return $this->icon;
    }

    /**
     * @return int
     */
    public function stackable() : int
    {
        return $this->stackable;
    }

    /**
     * @return int
     */
    public function itemBind() : int
    {
        return $this->itemBind;
    }

    /**
     * @return array
     */
    public function bonusStats() : array
    {
        return $this->bonusStats;
    }

    /**
     * @return array
     */
    public function itemSpells() : array
    {
        return $this->itemSpells;
    }

    /**
     * @return int
     */
    public function buyPrice() : int
    {
        return $this->buyPrice;
    }

    /**
     * @return int
     */
    public function itemClass() : int
    {
        return $this->itemClass;
    }

    /**
     * @return int
     */
    public function itemSubClass() : int
    {
        return $this->itemSubClass;
    }

    /**
     * @return int
     */
    public function containerSlots() : int
    {
        return $this->containerSlots;
    }

    /**
     * @return int
     */
    public function inventoryType() : int
    {
        return $this->inventoryType;
    }

    /**
     * @return bool
     */
    public function equippable() : bool
    {
        return $this->equippable;
    }

    /**
     * @return int
     */
    public function itemLevel() : int
    {
        return $this->itemLevel;
    }

    /**
     * @return int
     */
    public function maxCount() : int
    {
        return $this->maxCount;
    }

    /**
     * @return int
     */
    public function maxDurability() : int
    {
        return $this->maxDurability;
    }

    /**
     * @return int
     */
    public function minFactionId() : int
    {
        return $this->minFactionId;
    }

    /**
     * @return int
     */
    public function minReputation() : int
    {
        return $this->minReputation;
    }

    /**
     * @return int
     */
    public function quality() : int
    {
        return $this->quality;
    }

    /**
     * @return int
     */
    public function sellPrice() : int
    {
        return $this->sellPrice;
    }

    /**
     * @return int
     */
    public function requiredSkill() : int
    {
        return $this->requiredSkill;
    }

    /**
     * @return array
     */
    public function requiredAbility() : array
    {
        return $this->requiredAbility;
    }

    /**
     * @return int
     */
    public function requiredLevel() : int
    {
        return $this->requiredLevel;
    }

    /**
     * @return int
     */
    public function requiredSkillRank() : int
    {
        return $this->requiredSkillRank;
    }

    /**
     * @return array
     */
    public function itemSource() : array
    {
        return $this->itemSource;
    }

    /**
     * @return int
     */
    public function baseArmor() : int
    {
        return $this->baseArmor;
    }

    /**
     * @return bool
     */
    public function hasSockets() : bool
    {
        return $this->hasSockets;
    }

    /**
     * @return bool
     */
    public function isAuctionable() : bool
    {
        return $this->isAuctionable;
    }

    /**
     * @return int
     */
    public function armor() : int
    {
        return $this->armor;
    }

    /**
     * @return int
     */
    public function displayInfoId() : int
    {
        return $this->displayInfoId;
    }

    /**
     * @return string
     */
    public function nameDescription() : string
    {
        return $this->nameDescription;
    }

    /**
     * @return string
     */
    public function nameDescriptionColor() : string
    {
        return $this->nameDescriptionColor;
    }

    /**
     * @return bool
     */
    public function upgradable() : bool
    {
        return $this->upgradable;
    }

    /**
     * @return bool
     */
    public function heroicTooltip() : bool
    {
        return $this->heroicTooltip;
    }

    /**
     * @return string
     */
    public function context() : string
    {
        return $this->context;
    }

    /**
     * @return array
     */
    public function bonusLists() : array
    {
        return $this->bonusLists;
    }

    /**
     * @return array
     */
    public function availableContexts() : array
    {
        return $this->availableContexts;
    }

    /**
     * @return array
     */
    public function bonusSummary() : array
    {
        return $this->bonusSummary;
    }
}
