<?php

namespace Ebay\Sell\Marketing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type contains a list of campaigns.
 */
class Campaigns extends AbstractModel
{
    /**
     * An array of campaigns and their details.
     *
     * @var \Ebay\Sell\Marketing\Model\Campaign[]
     */
    public $campaigns = null;
}
