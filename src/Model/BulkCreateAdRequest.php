<?php

namespace Ebay\Sell\Marketing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type defines the fields for the create ads in bulk by listing IDs.
 */
class BulkCreateAdRequest extends AbstractModel
{
    /**
     * An array of listing IDs and their associated bid percentages, which the request
     * uses to create ads in bulk. This request accepts both listing IDs, as generated
     * by the Inventory API, and an item IDs, as used in the eBay Traditional API set
     * (e.g., the Trading and Finding APIs). Maximum: 500 IDs per call.
     *
     * @var \Ebay\Sell\Marketing\Model\CreateAdRequest[]
     */
    public $requests = null;
}
