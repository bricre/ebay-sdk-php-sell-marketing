<?php

namespace Ebay\Sell\Marketing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type defines the fields for the create ads in bulk response.
 */
class BulkAdResponse extends AbstractModel
{
    /**
     * A list of ads processed by the call.
     *
     * @var \Ebay\Sell\Marketing\Model\AdResponse[]
     */
    public $responses = null;
}
