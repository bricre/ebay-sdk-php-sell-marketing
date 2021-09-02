<?php

namespace Ebay\Sell\Marketing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type defines the fields used to create ads in bulk by inventory reference
 * IDs.
 */
class BulkCreateAdsByInventoryReferenceRequest extends AbstractModel
{
    /**
     * A lsit of inventory reference ID and inventory reference type pairs, and the bid
     * percentage, which the call uses to create ads in bulk.
     *
     * @var \Ebay\Sell\Marketing\Model\CreateAdsByInventoryReferenceRequest[]
     */
    public $requests = null;
}
