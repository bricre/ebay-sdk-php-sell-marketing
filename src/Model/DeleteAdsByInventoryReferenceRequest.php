<?php

namespace Ebay\Sell\Marketing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type defines the fields needed to delete an ad by its inventory reference
 * ID. You must always supply both inventory_reference_id and
 * inventory_reference_type.
 */
class DeleteAdsByInventoryReferenceRequest extends AbstractModel
{
    /**
     * An ID that identifies an a single-item listing or multiple-variation listing
     * that is managed with the Inventory API. The inventory reference ID is a
     * seller-defined value that can be either an SKU for a single-item listing or an
     * inventoryItemGroupKey for a multiple-value listing.
     *
     * @var string
     */
    public $inventoryReferenceId = null;

    /**
     * Indicates the type of item the inventoryReferenceId references. The item can be
     * either an INVENTORY_ITEM or INVENTORY_ITEM_GROUP. You must always pair an
     * inventoryReferenceId with and inventoryReferenceType. For implementation help,
     * refer to <a
     * href='https://developer.ebay.com/api-docs/sell/marketing/types/pls:InventoryReferenceTypeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $inventoryReferenceType = null;
}
