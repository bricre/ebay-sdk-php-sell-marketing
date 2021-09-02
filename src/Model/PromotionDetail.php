<?php

namespace Ebay\Sell\Marketing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type defines the fields that describe a promotion. This includes all the
 * information about a promotion except for the listings that are a part of the
 * promotion.
 */
class PromotionDetail extends AbstractModel
{
    /**
     * A unique code that buyers can use during checkout to receive a discount. The
     * code must be unique across eBay.
     *
     * @var string
     */
    public $couponCode = null;

    /**
     * The date and time the promotion ends in UTC format (yyyy-MM-ddThh:mm:ssZ). If
     * this field is blank (null), it indicates the promotion has no end date. For
     * display purposes, convert this time into the local time of the seller.
     *
     * @var string
     */
    public $endDate = null;

    /**
     * The eBay marketplace ID of the site where the promotion is hosted. Threshold
     * promotions are supported on a select set of marketplaces while markdown
     * promotions are supported on all eBay marketplaces. Valid values for threshold
     * promotions are as follows: EBAY_AU = Australia EBAY_DE = Germany EBAY_ES = Spain
     * EBAY_FR = France EBAY_GB = Great Britain EBAY_IT = Italy EBAY_US = United States
     * For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/marketing/types/ba:MarketplaceIdEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $marketplaceId = null;

    /**
     * The seller-defined name or &quot;title&quot; of the promotion, such as &quot;Buy
     * 1 Get 1&quot;, that the seller can use to identify a promotion. This label is
     * not displayed in end-user flows. Maximum length: 90.
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
     * The URI of the promotion details.
     *
     * @var string
     */
    public $promotionHref = null;

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
     * The current status of the promotion. When creating a new promotion, you must set
     * this value to either DRAFT or SCHEDULED. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/marketing/types/sme:PromotionStatusEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $promotionStatus = null;

    /**
     * Indicates type of the promotion, either CODED_COUPON, MARKDOWN_SALE,
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
