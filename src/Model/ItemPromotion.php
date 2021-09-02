<?php

namespace Ebay\Sell\Marketing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type defines the fields that describe a threshold promotion and includes
 * the promotional discount, the items included in the promotion, and the rules
 * that specify when the promotion is applied.
 */
class ItemPromotion extends AbstractModel
{
    /**
     * This flag is relevant in only when promotionType is set to VOLUME_DISCOUNT. For
     * details on volume pricing promotions, see Configuring volume pricing discounts.
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
     * This container defines a promotion using the following two required fields:
     * discountBenefit &ndash; Defines a discount as either a monetary amount or a
     * percentage that is subtracted from the sales price of an item, a set of items,
     * or an order. discountSpecification &ndash; Defines a set of rules that determine
     * when the promotion is applied. Note: For volume pricing, you must specify at
     * least two and not more than four discountBenefit/discountSpecification pairs. In
     * addition, you must define each set of rules with a ruleOrder value that
     * corresponds with the order of volume discounts you present. Tip: Refer to
     * Specifying item promotion discounts for information and examples on how to
     * combine discountBenefit and discountSpecification to create different types of
     * promotions.
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
     * A container that defines either the listing IDs or the selection rules that
     * specify the items to include in the promotion. Listing IDs can be either eBay
     * listing IDs or a list of the seller's inventory reference IDs (know as SKUs or
     * custom labels). See the selectionRules container for the rule criteria you can
     * use to select inventory. Note: All listings in Promotions Manager promotions
     * must support an electronic payment method.
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
     * precedence of the promotion, which is used to determine the position of a
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
     * This field is required for CODED_COUPON and MARKDOWN_SALE promotions, optional
     * for ORDER_DISCOUNT promotions, and not valid for VOLUME_DISCOUNT promotions.
     * Populate this field with a URL that points to an image to be used with the
     * promotion. This image is displayed on the seller's All Offers page. The URL must
     * point to either JPEG or PNG image and it must be a minimum of 500x500 pixels in
     * dimension and cannot exceed 12Mb in size.
     *
     * @var string
     */
    public $promotionImageUrl = null;

    /**
     * The current status of the promotion. When creating a new promotion, this value
     * must be set to either DRAFT or SCHEDULED. Note that you must set this value to
     * SCHEDULED when you update a RUNNING promotion. For implementation help, refer to
     * <a
     * href='https://developer.ebay.com/api-docs/sell/marketing/types/sme:PromotionStatusEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $promotionStatus = null;

    /**
     * Use this field to specify the type of the promotion you are creating. The
     * supported types are: CODED_COUPON &ndash; A coupon code promotion set with
     * createItemPromotion. MARKDOWN_SALE &ndash; A markdown promotion set with
     * createItemPriceMarkdownPromotion. ORDER_DISCOUNT &ndash; A threshold promotion
     * set with createItemPromotion. VOLUME_DISCOUNT &ndash; A volume pricing promotion
     * set with createItemPromotion. See the Promotions Manager documentation for
     * details. Required if you are creating a volume pricing promotion
     * (VOLUME_DISCOUNT). For implementation help, refer to <a
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
