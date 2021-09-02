<?php

namespace Ebay\Sell\Marketing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This complex type defines the fields returned for an item (threshold) promotion.
 */
class ItemPromotionResponse extends AbstractModel
{
    /**
     * If set to true, the discount is applied only when the buyer purchases multiple
     * quantities of a single item in the promotion. Otherwise, the promotional
     * discount applies to multiple quantities of any items in the promotion. Different
     * variations of a multi-variation item are considered to be the same item. Note
     * that this flag is not relevant if the inventoryCriterion container identifies a
     * single listing ID for the promotion.
     *
     * @var bool
     */
    public $applyDiscountToSingleItemOnly = null;

    /**
     * This sets the budget for the CODED_COUPON promotion type. Supported values range
     * from 100-1000000. Supported currency codes include USD, GBP, EUR, and AUD. Note:
     * The budget value for an active or paused promotion can not be decreased. Note:
     * The Currency Code for 'budget' must be the same as the Currency Code for
     * 'maxDiscountAmount'.
     *
     * @var \Ebay\Sell\Marketing\Model\Amount
     */
    public $budget = null;

    /**
     * The configuration of a coded coupon promotion.
     *
     * @var \Ebay\Sell\Marketing\Model\CouponConfiguration
     */
    public $couponConfiguration = null;

    /**
     * A list containing the promotion benefits (discountRule) and the rules that
     * define when the benefit is applied (discountSpecification).
     *
     * @var \Ebay\Sell\Marketing\Model\DiscountRule[]
     */
    public $discountRules = null;

    /**
     * The date and time the promotion ends in UTC format (yyyy-MM-ddThh:mm:ssZ). If
     * this field is blank (null), it indicates the promotion has no end date. For
     * display purposes, convert this time into the local time of the seller.
     *
     * @var string
     */
    public $endDate = null;

    /**
     * Returns either an array of listing IDs or the selection rules used to specify
     * the items included in the promotion. Listing IDs can be either eBay listing IDs
     * or an array of seller's inventory reference IDs (know as SKUs or custom labels).
     * See the selectionRules container for the rule criteria you can use to select
     * inventory.
     *
     * @var \Ebay\Sell\Marketing\Model\InventoryCriterion
     */
    public $inventoryCriterion = null;

    /**
     * The eBay marketplace ID of the site where the threshold promotion is hosted.
     * Threshold promotions are currently supported on a limited number of eBay
     * marketplaces. Valid values: EBAY_AU = Australia EBAY_DE = Germany EBAY_ES =
     * Spain EBAY_FR = France EBAY_GB = Great Britain EBAY_IT = Italy EBAY_US = United
     * States For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/marketing/types/ba:MarketplaceIdEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $marketplaceId = null;

    /**
     * The seller-defined name or &quot;title&quot; of the promotion that the seller
     * can use to identify a promotion. This label is not displayed in end-user flows.
     * Maximum length: 90.
     *
     * @var string
     */
    public $name = null;

    /**
     * Applicable for only ORDER_DISCOUNT promotions, this field indicates the
     * precedence of the promotion, which eBay uses to determine the position of a
     * promotion on the seller's All Offers page. If an item is associated with
     * multiple promotions, the promotion with the higher priority takes precedence.
     * For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/marketing/types/sme:PromotionPriorityEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $priority = null;

    /**
     * A unique eBay-assigned ID for the promotion that's generated when the promotion
     * is created.
     *
     * @var string
     */
    public $promotionId = null;

    /**
     * Required for CODED_COUPON and MARKDOWN_SALE promotions, optional for
     * ORDER_DISCOUNT promotions, and not applicable for VOLUME_DISCOUNT promotions,
     * this field is a URL that points to an image for the promotion. This image is
     * displayed on the seller's All Offers page. The URL must point to either JPEG or
     * PNG image and it must be a minimum of 500x500 pixels in dimension and cannot
     * exceed 12Mb in size.
     *
     * @var string
     */
    public $promotionImageUrl = null;

    /**
     * The current status of the promotion. When creating a new promotion, this value
     * must be set to either DRAFT or SCHEDULED. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/marketing/types/sme:PromotionStatusEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $promotionStatus = null;

    /**
     * Indicates the type of the promotion, either CODED_COUPON, MARKDOWN_SALE,
     * ORDER_DISCOUNT, or VOLUME_DISCOUNT. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/marketing/types/sme:PromotionTypeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $promotionType = null;

    /**
     * The date and time the promotion starts in UTC format (yyyy-MM-ddThh:mm:ssZ). For
     * display purposes, convert this time into the local time of the seller.
     *
     * @var string
     */
    public $startDate = null;
}
