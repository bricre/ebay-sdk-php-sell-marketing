<?php

namespace Ebay\Sell\Marketing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type defines a container that lists the ads that bulkDeleteAdsByListingId
 * deleted.
 */
class BulkDeleteAdResponse extends AbstractModel
{
    /**
     * An array of the ads that were deleted by the bulkDeleteAdsByListingId request,
     * including information associated with each individual delete request.
     *
     * @var \Ebay\Sell\Marketing\Model\DeleteAdResponse[]
     */
    public $responses = null;
}
