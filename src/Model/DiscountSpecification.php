<?php

namespace Ebay\Sell\Marketing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This container defines the criteria for when the discounts of a promotion
 * trigger, such as the minimum quantity the buyer must purchase before the
 * promotion kicks in. The promotional discount is applied each time the criteria
 * defined by this container is met. Note: When configuring the rules that govern
 * when the discounts are applied, populate just one of the following fields in the
 * discountSpecification container: minAmount minQuantity forEachQuantity
 * forEachAmount Tip: Refer to Configuring discounts for threshold promotions for
 * information and examples on how to combine discountBenefit and
 * discountSpecification to create different types of promotions.
 */
class DiscountSpecification extends AbstractModel
{
    /**
     * The monetary amount that must be spent on promoted items before the promotional
     * discount is applied. Valid values for the associated forEachAmount.value field:
     * &nbsp; 5, 10, 15, 20, 25, 30, 35, 40, 45, 49, &nbsp; 50, 55, 59, 60, 65, 69, 70,
     * 75, 79, 80, &nbsp; 85, 89, 90, 95, 99, 100, 110, 120, 125, &nbsp; 149, 150, 175,
     * 199, 200, 249, 250, 299, &nbsp; 300, 350, 399, 400, 450, 499, 500.
     *
     * @var \Ebay\Sell\Marketing\Model\Amount
     */
    public $forEachAmount = null;

    /**
     * The number of items that must be purchased in order to qualify for the discount.
     * Valid values: &nbsp; 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, &nbsp; 12, 13, 14, 15,
     * 16, 17, 18, 19 &nbsp; 20, 25, 50, 75, 100.
     *
     * @var int
     */
    public $forEachQuantity = null;

    /**
     * Known as the &quot;threshold amount&quot;, the minimum dollar amount that needs
     * to be spent on promoted items in order to qualify for the promotion's discount.
     * Valid values for the associated minAmount.value field: &nbsp; 5, 10, 15, 20, 25,
     * 30, 35, 40, 45, 49, &nbsp; 50, 55, 59, 60, 65, 69, 70, 75, 79, 80, &nbsp; 85,
     * 89, 90, 95, 99, 100, 110, 120, &nbsp; 125, 149, 150, 175, 199, 200, 249, 250,
     * 299, &nbsp; 300, 350, 399, 400, 450, 499, 500.
     *
     * @var \Ebay\Sell\Marketing\Model\Amount
     */
    public $minAmount = null;

    /**
     * The minimum quantity of promoted items that needs to be bought in order to
     * qualify for the promotion's discount. Valid values: &nbsp; 1, 2, 3, 4, 5, 6, 7,
     * 8, 9, 10, 11, &nbsp; 12, 13, 14, 15, 16, 17, 18, 19 &nbsp; 20, 25, 50, 75, 100.
     *
     * @var int
     */
    public $minQuantity = null;

    /**
     * Use this field to configure &quot;Buy One Get One&quot; (or BOGO) promotions.
     * You must couple this field with forEachQuantity and an amountOffItem or
     * percentOffItem field to configure your BOGO promotion. This field is not valid
     * with order-based promotions. The value of this field represents the number of
     * items to be discounted when other promotion criteria is met. For example, when
     * the buyer adds the number of items identified by the forEachQuantity value to
     * their cart, they are then eligible to receive the stated discount from an
     * additional number of like items (the number of which is identified by this
     * field) when they add those items to their cart. To receive the discount, the
     * buyer must purchase the number of items indicated by forEachQuantity plus the
     * number indicated by this field. Valid values: &nbsp; 1, 2, 3, 4, 5, 6, 7, 8, 9,
     * 10.
     *
     * @var int
     */
    public $numberOfDiscountedItems = null;
}
