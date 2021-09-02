<?php

namespace Ebay\Sell\Marketing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type specifies the bid percentage for an ad campaign.
 */
class UpdateBidPercentageRequest extends AbstractModel
{
    /**
     * The user-defined bid percentage (also known as the ad rate) sets the level that
     * eBay increases the visibility in search results for the associated listing. The
     * higher the bidPercentage value, the more eBay promotes the listing. The value
     * specified here is also used to calculate the Promoted Listings fee. This
     * percentage value is multiplied by the final sales price to determine the fee.
     * The Promoted Listings fee is determined at the time the transaction completes
     * and the seller is assessed the fee only when an item sells through a Promoted
     * Listings ad campaign. bidPercentage is a single precision value that is guided
     * by the following rules: These values are valid: &nbsp;&nbsp;&nbsp;1,
     * &nbsp;&nbsp;&nbsp;1.0, &nbsp;&nbsp;&nbsp;4.1, &nbsp;&nbsp;&nbsp;5.0,
     * &nbsp;&nbsp;&nbsp;5.5, ... These values are not valid: &nbsp;&nbsp;&nbsp;0.01,
     * &nbsp;&nbsp;&nbsp;10.75, &nbsp;&nbsp;&nbsp;99.99, &nbsp;&nbsp;&nbsp;and so on.
     * If a bid percentage is not provided for an ad, eBay uses the default bid
     * percentage of the associated campaign.Minimum value: 1.0 Maximum value: 100.0.
     *
     * @var string
     */
    public $bidPercentage = null;
}
