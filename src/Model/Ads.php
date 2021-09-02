<?php

namespace Ebay\Sell\Marketing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type defines the container for an array of ads.
 */
class Ads extends AbstractModel
{
    /**
     * A list of ad IDs and the URIs that point to them.
     *
     * @var \Ebay\Sell\Marketing\Model\Ad[]
     */
    public $ads = null;
}
