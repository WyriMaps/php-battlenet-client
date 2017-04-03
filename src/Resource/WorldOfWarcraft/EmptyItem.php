<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\WorldOfWarcraft;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyItem implements ItemInterface, EmptyResourceInterface
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
    public function description() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function name() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function icon() : string
    {
        return null;
    }

    /**
     * @return int
     */
    public function stackable() : int
    {
        return null;
    }

    /**
     * @return int
     */
    public function itemBind() : int
    {
        return null;
    }

    /**
     * @return array
     */
    public function bonusStats() : array
    {
        return null;
    }

    /**
     * @return array
     */
    public function itemSpells() : array
    {
        return null;
    }

    /**
     * @return int
     */
    public function buyPrice() : int
    {
        return null;
    }

    /**
     * @return int
     */
    public function itemClass() : int
    {
        return null;
    }

    /**
     * @return int
     */
    public function itemSubClass() : int
    {
        return null;
    }

    /**
     * @return int
     */
    public function containerSlots() : int
    {
        return null;
    }

    /**
     * @return int
     */
    public function inventoryType() : int
    {
        return null;
    }

    /**
     * @return bool
     */
    public function equippable() : bool
    {
        return null;
    }

    /**
     * @return int
     */
    public function itemLevel() : int
    {
        return null;
    }

    /**
     * @return int
     */
    public function maxCount() : int
    {
        return null;
    }

    /**
     * @return int
     */
    public function maxDurability() : int
    {
        return null;
    }

    /**
     * @return int
     */
    public function minFactionId() : int
    {
        return null;
    }

    /**
     * @return int
     */
    public function minReputation() : int
    {
        return null;
    }

    /**
     * @return int
     */
    public function quality() : int
    {
        return null;
    }

    /**
     * @return int
     */
    public function sellPrice() : int
    {
        return null;
    }

    /**
     * @return int
     */
    public function requiredSkill() : int
    {
        return null;
    }

    /**
     * @return array
     */
    public function requiredAbility() : array
    {
        return null;
    }

    /**
     * @return int
     */
    public function requiredLevel() : int
    {
        return null;
    }

    /**
     * @return int
     */
    public function requiredSkillRank() : int
    {
        return null;
    }

    /**
     * @return array
     */
    public function itemSource() : array
    {
        return null;
    }

    /**
     * @return int
     */
    public function baseArmor() : int
    {
        return null;
    }

    /**
     * @return bool
     */
    public function hasSockets() : bool
    {
        return null;
    }

    /**
     * @return bool
     */
    public function isAuctionable() : bool
    {
        return null;
    }

    /**
     * @return int
     */
    public function armor() : int
    {
        return null;
    }

    /**
     * @return int
     */
    public function displayInfoId() : int
    {
        return null;
    }

    /**
     * @return string
     */
    public function nameDescription() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function nameDescriptionColor() : string
    {
        return null;
    }

    /**
     * @return bool
     */
    public function upgradable() : bool
    {
        return null;
    }

    /**
     * @return bool
     */
    public function heroicTooltip() : bool
    {
        return null;
    }

    /**
     * @return string
     */
    public function context() : string
    {
        return null;
    }

    /**
     * @return array
     */
    public function bonusLists() : array
    {
        return null;
    }

    /**
     * @return array
     */
    public function availableContexts() : array
    {
        return null;
    }

    /**
     * @return array
     */
    public function bonusSummary() : array
    {
        return null;
    }
}
