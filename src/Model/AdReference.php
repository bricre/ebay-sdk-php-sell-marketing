<?php

namespace Ebay\Sell\Marketing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type defines the fields for an ad ID and its associated URL.
 */
class AdReference extends AbstractModel
{
    /**
     * A unique eBay-assigned ID for an ad. This ID is generated when an ad is created.
     *
     * @var string
     */
    public $adId = null;

    /**
     * The URI of an ad. You can use this URI to retrieve the ad.
     *
     * @var string
     */
    public $href = null;
}
