<?php

namespace Ebay\Sell\Marketing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type defines either the selections rules or the list of listing IDs for the
 * promotion. The &quot;listing IDs&quot; are are either the seller's item IDs or
 * the eBay listing IDs.
 */
class InventoryCriterion extends AbstractModel
{
    /**
     * Indicates how the items to include in the promotion are selected. You can
     * include inventory by ID, using rules, or globally include all your inventory.
     * For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/marketing/types/sme:InventoryCriterionEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $inventoryCriterionType = null;

    /**
     * An array of containers for the seller's inventory reference IDs (also known as
     * an &quot;SKU&quot; or &quot;custom label&quot;) to be added to the promotion.
     * Note: The request can have either inventoryItems or listingIds, but not both.
     * Required: All listings in a promotion must offer an electronic payment method.
     * Maximum: 500 parent items Maximum SKU or custom label length: 50 characters
     * Required if InventoryCriterionType is set to INVENTORY_BY_VALUE, you must
     * specify either inventoryItems or listingIds.
     *
     * @var \Ebay\Sell\Marketing\Model\InventoryItem[]
     */
    public $inventoryItems = null;

    /**
     * An array of eBay listing IDs to be added to the promotion. Note: The request can
     * have either inventoryItems or listingIds, but not both. Required: All listings
     * in a promotion must offer an electronic payment method. Maximum: 500 parent
     * items Maximum SKU or custom label length: 50 characters Required if
     * InventoryCriterionType is set to INVENTORY_BY_VALUE, you must specify either
     * inventoryItems or listingIds.
     *
     * @var string[]
     */
    public $listingIds = null;

    /**
     * This container defines a set of inventory selection rules for a promotion. When
     * defining rule criteria, you must limit item exclusions to 100 IDs when you
     * choose from live inventory. Required if InventoryCriterionEnum is set to
     * INVENTORY_BY_RULE or INVENTORY_ANY.
     *
     * @var \Ebay\Sell\Marketing\Model\RuleCriteria
     */
    public $ruleCriteria = null;
}
