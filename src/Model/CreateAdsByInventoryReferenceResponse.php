<?php

namespace Ebay\Sell\Marketing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type defines the fields returned when you create an ad by inventory
 * reference ID.
 */
class CreateAdsByInventoryReferenceResponse extends AbstractModel
{
    /**
     * A list of ad IDs (based on their inventory reference IDs) and the URIs that
     * point to them.
     *
     * @var \Ebay\Sell\Marketing\Model\AdReference[]
     */
    public $ads = null;

    /**
     * An array of errors or warnings associated with the create-ads request.
     *
     * @var \Ebay\Sell\Marketing\Model\Error[]
     */
    public $errors = null;

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
     * either an INVENTORY_ITEM or INVENTORY_ITEM_GROUP. For implementation help, refer
     * to <a
     * href='https://developer.ebay.com/api-docs/sell/marketing/types/pls:InventoryReferenceTypeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $inventoryReferenceType = null;

    /**
     * An HTTP status code that indicates the response-status of the request. Check
     * this code to see if the ads were successful created.
     *
     * @var int
     */
    public $statusCode = null;
}
