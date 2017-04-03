<?php declare(strict_types=1);

namespace WyriMaps\BattleNet\Resource\WorldOfWarcraft;

use ApiClients\Foundation\Resource\ResourceInterface;

interface ItemInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'WorldOfWarcraft\\Item';

    /**
     * @return int
     */
    public function id() : int;

    /**
     * @return string
     */
    public function description() : string;

    /**
     * @return string
     */
    public function name() : string;

    /**
     * @return string
     */
    public function icon() : string;

    /**
     * @return int
     */
    public function stackable() : int;

    /**
     * @return int
     */
    public function itemBind() : int;

    /**
     * @return array
     */
    public function bonusStats() : array;

    /**
     * @return array
     */
    public function itemSpells() : array;

    /**
     * @return int
     */
    public function buyPrice() : int;

    /**
     * @return int
     */
    public function itemClass() : int;

    /**
     * @return int
     */
    public function itemSubClass() : int;

    /**
     * @return int
     */
    public function containerSlots() : int;

    /**
     * @return int
     */
    public function inventoryType() : int;

    /**
     * @return bool
     */
    public function equippable() : bool;

    /**
     * @return int
     */
    public function itemLevel() : int;

    /**
     * @return int
     */
    public function maxCount() : int;

    /**
     * @return int
     */
    public function maxDurability() : int;

    /**
     * @return int
     */
    public function minFactionId() : int;

    /**
     * @return int
     */
    public function minReputation() : int;

    /**
     * @return int
     */
    public function quality() : int;

    /**
     * @return int
     */
    public function sellPrice() : int;

    /**
     * @return int
     */
    public function requiredSkill() : int;

    /**
     * @return array
     */
    public function requiredAbility() : array;

    /**
     * @return int
     */
    public function requiredLevel() : int;

    /**
     * @return int
     */
    public function requiredSkillRank() : int;

    /**
     * @return array
     */
    public function itemSource() : array;

    /**
     * @return int
     */
    public function baseArmor() : int;

    /**
     * @return bool
     */
    public function hasSockets() : bool;

    /**
     * @return bool
     */
    public function isAuctionable() : bool;

    /**
     * @return int
     */
    public function armor() : int;

    /**
     * @return int
     */
    public function displayInfoId() : int;

    /**
     * @return string
     */
    public function nameDescription() : string;

    /**
     * @return string
     */
    public function nameDescriptionColor() : string;

    /**
     * @return bool
     */
    public function upgradable() : bool;

    /**
     * @return bool
     */
    public function heroicTooltip() : bool;

    /**
     * @return string
     */
    public function context() : string;

    /**
     * @return array
     */
    public function bonusLists() : array;

    /**
     * @return array
     */
    public function availableContexts() : array;

    /**
     * @return array
     */
    public function bonusSummary() : array;
}
