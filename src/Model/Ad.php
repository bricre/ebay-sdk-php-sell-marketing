<?php

namespace Ebay\Sell\Marketing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type defines the fields for an ad.
 */
class Ad extends AbstractModel
{
    /**
     * A unique eBay-assigned ID for the ad that is generated when the ad is created.
     *
     * @var string
     */
    public $adId = null;

    /**
     * The user-defined bid percentage (also known as the ad rate) sets level to which
     * eBay should raise the visibility of the associated listing across the eBay buyer
     * flows. The value is also used to calculate the Promoted Listings fee. Minimum
     * value: 1.0 Maximum value: 100.0.
     *
     * @var string
     */
    public $bidPercentage = null;

    /**
     * An ID that identifies an a single-item listing or multiple-variation listing
     * that is managed with the Inventory API. The inventory reference ID is a
     * seller-defined value that can be either an SKU for a single-item listing or an
     * inventoryItemGroupKey for a multiple-value listing. An inventoryItemGroupKey is
     * a value that the seller defines to indicate a listing that's the parent of a
     * inventory item group (a multiple-variation listing, such as a listing for shirt
     * that's available in multiple sizes and colors). You must always specify both an
     * inventoryRreferenceId and an inventoryReferenceType to indicate an item that's
     * managed with the Inventory API.
     *
     * @var string
     */
    public $inventoryReferenceId = null;

    /**
     * Indicates the type of item the inventoryReferenceId references. The item can be
     * either an INVENTORY_ITEM or INVENTORY_ITEM_GROUP. For implementation help, refer
     * to <a
     * href='https://developer.ebay.com/api-docs/sell/marketing/types/pls:InventoryReferenceTypeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $inventoryReferenceType = null;

    /**
     * A unique eBay-assigned ID that is generated when a listing is created via the
     * Trading API.
     *
     * @var string
     */
    public $listingId = null;
}
