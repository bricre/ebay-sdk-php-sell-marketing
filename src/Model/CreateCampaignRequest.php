<?php

namespace Ebay\Sell\Marketing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type defines the fields needed to create a campaign. To create a campaign,
 * you need to specify a name, start and end dates, funding, marketplace, and
 * optionally the criterion (selection rules).
 */
class CreateCampaignRequest extends AbstractModel
{
    /**
     * Container for the fields that define the criteria for a rule-based campaign.
     *
     * @var \Ebay\Sell\Marketing\Model\CampaignCriterion
     */
    public $campaignCriterion = null;

    /**
     * A seller-defined name for the campaign. This value must be unique for the
     * seller. You can use any alphanumeric characters in the name, except the less
     * than (&lt;) or greater than (&gt;) characters.Max length: 80 characters.
     *
     * @var string
     */
    public $campaignName = null;

    /**
     * The date and time the campaign ends, in UTC format (yyyy-MM-ddThh:mm:ssZ). If
     * this field is blank (code&gt;null), it indicates a campaign that has no end
     * date. For display purposes, convert this time into the local time of the seller.
     *
     * @var string
     */
    public $endDate = null;

    /**
     * This field specifies the funding model that defines how the Promoted Listing fee
     * is calculated. The seller is assessed the fee if an item sells via a Promoted
     * Listings action (such as buyer clicking on a Promoted Listings ad). currently,
     * the only funding model supported is COST_PER_SALE.
     *
     * @var \Ebay\Sell\Marketing\Model\FundingStrategy
     */
    public $fundingStrategy = null;

    /**
     * The ID of the eBay marketplace where the campaign is hosted. Note the
     * X-EBAY-C-MARKETPLACE-Id header value is ignored for this purpose. For
     * implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/marketing/types/ba:MarketplaceIdEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $marketplaceId = null;

    /**
     * The date and time the campaign starts, in UTC format (yyyy-MM-ddThh:mm:ssZ). For
     * display purposes, convert this time into the local time of the seller. On the
     * date specified, the service derives the keywords for each listing in the
     * campaign, creates an ad for each listing, and associates each new ad with the
     * campaign. The campaign starts after this process is completed. The amount of
     * time it takes the service to start the campaign depends on the number of
     * listings in the campaign. Call getCampaign to check the status of the campaign.
     *
     * @var string
     */
    public $startDate = null;
}
