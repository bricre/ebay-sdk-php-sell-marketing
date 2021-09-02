<?php

namespace Ebay\Sell\Marketing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This complex type defines a promotion as being either a monetary amount or a
 * percentage of a sales price that's subtracted from the price of an item or
 * order. Set the amount of the discount and the rules that govern when the
 * discount triggers using the discountBenefit and discountSpecification fields.
 * Note: In volume pricing promotions, you must configure at least two discountRule
 * containers and at most four.
 */
class DiscountRule extends AbstractModel
{
    /**
     * This container defines the promotional discount as either a monetary amount or a
     * percentage of the sales price. Note: When configuring promotion benefits,
     * populate just one of the following fields in the discountBenefit container:
     * amountOffItem amountOffOrder percentageOffItem percentageOffOrder For volume
     * pricing, only percentageOffOrder is applicable as a discountBenefit. Also, the
     * first discountBenefit container in a volume pricing configuration must set
     * percentageOffOrder to 0. Tip: Refer to Configuring discounts for threshold
     * promotions for information and examples on how to combine discountBenefit and
     * discountSpecification to create different types of promotions.
     *
     * @var \Ebay\Sell\Marketing\Model\DiscountBenefit
     */
    public $discountBenefit = null;

    /**
     * This container defines the criteria for when the discounts of a promotion
     * trigger, such as the minimum quantity that the buyer must purchase before the
     * promotion kicks in. The promotional discount is applied each time the criteria
     * defined by this container is met. When configuring the rules that govern when
     * the discounts are applied, populate just one of the following fields in the
     * discountSpecification container: minAmount minQuantity forEachQuantity
     * forEachAmount Important: When configuring volume pricing promotions, only
     * minQuantity is applicable as a discountSpecification. Also, the configuration
     * for minQuantity in a volume pricing configuration is specific. In the first
     * discountSpecification container, set minQuantity to 1, and in the second, set
     * minQuantity to 2. If you include a third discountRules pair, minQuantity must be
     * set to 3, and in a fourth, it must be set to 4. Also, you must set a ruleOrder
     * value in each discountRules container. In the first container, discountRules
     * must be set to 1, and in each subsequent container, the value be be incremented
     * by 1. For more, see Configuring volume pricing discounts. Tip: see Configuring
     * discounts for threshold promotions for information and examples on how to
     * combine discountBenefit and discountSpecification to create different types of
     * promotions.
     *
     * @var \Ebay\Sell\Marketing\Model\DiscountSpecification
     */
    public $discountSpecification = null;

    /**
     * The limit on how much a buyer can save using a CODED_COUPON promotion type.
     * Permitted values are 1-1000. Supported currency codes include USD, GBP, EUR, and
     * AUD. Note: The Currency Code for 'maxDiscountAmount' must be the same as the
     * Currency Code for 'budget'.
     *
     * @var \Ebay\Sell\Marketing\Model\Amount
     */
    public $maxDiscountAmount = null;

    /**
     * This field indicates the order in which the discountRules are presented. The
     * value specified for this field must equal the associated minQuantity value.
     * Required if you are creating a volume pricing promotion.
     *
     * @var int
     */
    public $ruleOrder = null;
}
