<?php

namespace Ebay\Sell\Marketing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is a container for a list of ad IDs and their associated URIs.
 */
class AdReferences extends AbstractModel
{
    /**
     * A list of ad IDs and the URIs that point to them.
     *
     * @var \Ebay\Sell\Marketing\Model\AdReference[]
     */
    public $ads = null;
}
