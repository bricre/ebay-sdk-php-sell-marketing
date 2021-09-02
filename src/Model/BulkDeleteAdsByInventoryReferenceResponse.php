<?php

namespace Ebay\Sell\Marketing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type defines a container that lists the ads that
 * bulkDeleteAdsByInventoryReference deleted.
 */
class BulkDeleteAdsByInventoryReferenceResponse extends AbstractModel
{
    /**
     * An array of the ads that were deleted by the bulkDeleteAdsByInventoryReference
     * request, including information associated with each individual delete request.
     *
     * @var \Ebay\Sell\Marketing\Model\DeleteAdsByInventoryReferenceResponse[]
     */
    public $responses = null;
}
