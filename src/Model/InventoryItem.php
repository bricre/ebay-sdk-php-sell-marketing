<?php

namespace Ebay\Sell\Marketing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type defines the fields for the seller inventory reference IDs (also known
 * as an &quot;SKU&quot; or &quot;custom label&quot;).
 */
class InventoryItem extends AbstractModel
{
    /**
     * The seller's inventory reference ID for a listing. Also known as the
     * &quot;SKU&quot; or &quot;custom label,&quot; an inventory reference ID is either
     * the ID of the listing or, if the listing has variations (such as a shirt that's
     * available in multiple sizes and colors), the ID of the parent listing.
     *
     * @var string
     */
    public $inventoryReferenceId = null;
}
