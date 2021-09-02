<?php

namespace Ebay\Sell\Marketing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type defines the fields for a set of inventory selection rules. Required:
 * When inventoryCriterionType is set to INVENTORY_BY_RULE or INVENTORY_ANY.
 */
class RuleCriteria extends AbstractModel
{
    /**
     * A list of seller inventory reference IDs to exclude from the promotion. Note:
     * The request can have either excludeInventoryItems or excludeListingIds but not
     * both. Maximum: 100 parent items Maximum SKU or custom label length: 50
     * characters.
     *
     * @var \Ebay\Sell\Marketing\Model\InventoryItem[]
     */
    public $excludeInventoryItems = null;

    /**
     * A list of eBay listing IDs to exclude from the promotion. Note: The request can
     * have either excludeInventoryItems or excludeListingIds but not both. Maximum:
     * 100 parent items Maximum SKU or custom label length: 50 characters.
     *
     * @var string[]
     */
    public $excludeListingIds = null;

    /**
     * A list of SKUs to remove from a markdown promotion. The listed SKUs are 'marked
     * up' to their standard price after being part of the markdown promotion.
     *
     * @var \Ebay\Sell\Marketing\Model\InventoryItem[]
     */
    public $markupInventoryItems = null;

    /**
     * A list of listing IDs to remove from a markdown promotion. The listed items are
     * 'marked up' to their standard price after being part of the markdown promotion.
     *
     * @var string[]
     */
    public $markupListingIds = null;

    /**
     * The container for the rules that select the items to include in a promotion.
     * Required if inventoryCriterionType is set to INVENTORY_BY_RULE.
     *
     * @var \Ebay\Sell\Marketing\Model\SelectionRule[]
     */
    public $selectionRules = null;
}
