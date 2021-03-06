<?php

namespace Ebay\Sell\Marketing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This container defines a coded coupon promotion. It is required if the promotion
 * type is CODED_COUPON.
 */
class CouponConfiguration extends AbstractModel
{
    /**
     * A unique code that buyers can use during checkout to receive a discount. The
     * code must be unique across eBay. The code must be from 8-15 alphanumeric
     * characters and can contain no more than two dashes ( - ). This is required when
     * the promotion type is CODED_COUPON.
     *
     * @var string
     */
    public $couponCode = null;

    /**
     * This indicates the type of Coded Coupon promotion, and is required when the
     * promotion type is CODED_COUPON. Supported types: PRIVATE_SINGLE_SELLER_COUPON:
     * Anyone can use and share the coupon code, but it isn't posted on eBay.
     * PUBLIC_SINGLE_SELLER_COUPON: Anyone can find the coupon code on eBay and use it.
     * For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/marketing/types/sme:CouponTypeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $couponType = null;

    /**
     * This sets the limit on the number of times a buyer can use this coupon. The
     * range of values is 1-10. If no value is provided, a buyer can use the coupon an
     * unlimited number of times.
     *
     * @var int
     */
    public $maxCouponRedemptionPerUser = null;
}
