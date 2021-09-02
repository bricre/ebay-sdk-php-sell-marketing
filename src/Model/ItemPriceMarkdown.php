<?php

namespace Ebay\Sell\Marketing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type defines the fields used to describe an item price markdown promotion.
 */
class ItemPriceMarkdown extends AbstractModel
{
    /**
     * If set to true, free shipping is applied to the first shipping service specified
     * for the item. The first domestic shipping option is set to &quot;free
     * shipping,&quot; regardless if the shipping optionType for that service is set to
     * FLAT_RATE, CALCULATED, or NOT_SPECIFIED (freight). This flag essentially adds
     * free shipping as a promotional bonus. Default: false.
     *
     * @var bool
     */
    public $applyFreeShipping = null;

    /**
     * If set to true, eBay will automatically add inventory items to the markdown
     * promotion if they meet the selectedInventoryDiscounts criteria specified for the
     * markdown promotion. Default: false.
     *
     * @var bool
     */
    public $autoSelectFutureInventory = null;

    /**
     * If set to true, price increases (including removing the free shipping flag) are
     * blocked and an error message is returned if a seller attempts to adjust the
     * price of an item that's partaking in this markdown promotion. If set to false,
     * an item is dropped from the markdown promotion if the seller adjusts the price.
     * Default: false.
     *
     * @var bool
     */
    public $blockPriceIncreaseInItemRevision = null;

    /**
     * The date and time the promotion ends, in UTC format (yyyy-MM-ddThh:mm:ssZ). The
     * value supplied for endDate must be at least 24 hours after the value supplied
     * for the startDate of the markdown promotion. If this field is blank (null), it
     * indicates the promotion has no end date. For display purposes, convert this time
     * into the local time of the seller. Max value: 14 days for the AT, CH, DE, ES,
     * FR, IE, IT, and UK, marketplaces. 45 days for all other marketplaces.
     *
     * @var string
     */
    public $endDate = null;

    /**
     * The eBay marketplace ID of the site where the markdown promotion is hosted.
     * Markdown promotions are supported on all eBay marketplaces. For implementation
     * help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/marketing/types/ba:MarketplaceIdEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $marketplaceId = null;

    /**
     * The seller-defined name or 'title' of the promotion that the seller can use to
     * identify a promotion. This label is not displayed in end-user flows. Maximum
     * length: 90.
     *
     * @var string
     */
    public $name = null;

    /**
     * This field is ignored in markdown promotions. For implementation help, refer to
     * <a
     * href='https://developer.ebay.com/api-docs/sell/marketing/types/sme:PromotionPriorityEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $priority = null;

    /**
     * Required for CODED_COUPON and MARKDOWN_SALE promotions, and optional for
     * ORDER_DISCOUNT promotions, populate this field with a URL that points to an
     * image to be used with the promotion. This image is displayed on the seller's All
     * Offers page. The URL must point to either JPEG or PNG image and it must be a
     * minimum of 500x500 pixels in dimension and cannot exceed 12Mb in size.
     *
     * @var string
     */
    public $promotionImageUrl = null;

    /**
     * The current status of the promotion. When creating a new promotion, you must set
     * this value to either DRAFT or SCHEDULED. Note that you must set this value to
     * SCHEDULED when you update a RUNNING promotion. For implementation help, refer to
     * <a
     * href='https://developer.ebay.com/api-docs/sell/marketing/types/sme:PromotionStatusEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $promotionStatus = null;

    /**
     * A list that defines the sets of selected items for the markdown promotion and
     * the discount specified for promotion.
     *
     * @var \Ebay\Sell\Marketing\Model\SelectedInventoryDiscount[]
     */
    public $selectedInventoryDiscounts = null;

    /**
     * The date and time the promotion starts in UTC format (yyyy-MM-ddThh:mm:ssZ). For
     * display purposes, convert this time into the local time of the seller.
     *
     * @var string
     */
    public $startDate = null;
}
