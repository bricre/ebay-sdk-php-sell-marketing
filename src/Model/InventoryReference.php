<?php

namespace Ebay\Sell\Marketing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This complex type is used to identify an item that is managed by the Inventory
 * API. The type defines the fields contained in an inventory reference ID.
 */
class InventoryReference extends AbstractModel
{
    /**
     * The seller's inventory reference ID for an item that is managed with the
     * Inventory API. An inventory reference is either the ID of a single listing or
     * the ID of the parent of an item group listing (a multi-variation listing, such
     * as a shirt that is available in multiple sizes and colors). Required if if you
     * supply an inventoryReferenceType.
     *
     * @var string
     */
    public $inventoryReferenceId = null;

    /**
     * Indicates the type of item indicated by the inventoryReferenceId. This value can
     * be set to either INVENTORY_ITEM or INVENTORY_ITEM_GROUP (if the ID points to a
     * multi-variation listing). Required if if you supply an inventoryReferenceId. For
     * implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/marketing/types/pls:InventoryReferenceTypeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $inventoryReferenceType = null;
}
