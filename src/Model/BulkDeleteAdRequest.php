<?php

namespace Ebay\Sell\Marketing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type defines the fields that the call uses to remove ads in bulk.
 */
class BulkDeleteAdRequest extends AbstractModel
{
    /**
     * An array of the listing IDs that identify the ads to remove. Note: This request
     * accepts both listing IDs, as generated by the Inventory API, and an item IDs, as
     * used in the eBay Traditional API set (e.g., the Trading and Finding APIs).
     *
     * @var \Ebay\Sell\Marketing\Model\DeleteAdRequest[]
     */
    public $requests = null;
}
