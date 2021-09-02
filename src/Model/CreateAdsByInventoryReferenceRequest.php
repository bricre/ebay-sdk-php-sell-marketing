<?php

namespace Ebay\Sell\Marketing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type defines the fields needed to create ads by inventory reference ID
 * request.
 */
class CreateAdsByInventoryReferenceRequest extends AbstractModel
{
    /**
     * The user-defined bid percentage (also known as the ad rate) sets the level that
     * eBay increases the visibility of a listing across the eBay buyer flows. The
     * higher the bidPercentage value, the more eBay promotes the listing. The value
     * specified here is also used to calculate the Promoted Listings fee. This
     * percentage value is multiplied by the final sales price to determine the fee.
     * The Promoted Listings fee is determined at the time the transaction completes
     * and the seller is assessed the fee only when an item sells through a Promoted
     * Listings ad campaign. bidPercentage is a single precision value that is guided
     * by the following rules: These values are valid: &nbsp;&nbsp;&nbsp;1,
     * &nbsp;&nbsp;&nbsp;1.0, &nbsp;&nbsp;&nbsp;4.1, &nbsp;&nbsp;&nbsp;5.0,
     * &nbsp;&nbsp;&nbsp;5.5, ... These values are not valid: &nbsp;&nbsp;&nbsp;0.01,
     * &nbsp;&nbsp;&nbsp;10.75, &nbsp;&nbsp;&nbsp;99.99, &nbsp;&nbsp;&nbsp;and so on.
     * If a bid percentage is not provided for an ad, eBay uses the default bid
     * percentage of the associated campaign.Minimum value: 1.0 Maximum value: 100.0.
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
