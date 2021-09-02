<?php

namespace Ebay\Sell\Marketing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This container defines the promotional discount as either a monetary amount or a
 * percentage of the sales price. Important!: You must populate one and only one of
 * the fields in this container: amountOffItem amountOffOrder percentageOffItem
 * percentageOffOrder Tip: Refer to Configuring discounts for threshold promotions
 * for information and examples on how to combine discountBenefit and
 * discountSpecification values to create different types of promotions.
 */
class DiscountBenefit extends AbstractModel
{
    /**
     * The monetary amount that is discounted off an item (or items) when the promotion
     * criteria is met. For threshold promotions, where the buyer triggers the
     * discount, the valid values for this field are: &nbsp; 5, 6, 7, 8, 9, 10, 15, 20,
     * 25, &nbsp; 30, 35, 40, 45, 50, 55, 60, 65, &nbsp; 70, 75, 80, 85, 90, 95, 100,
     * 110, &nbsp; 120, 125, 150, 200, 250 For markdown promotions, the range is
     * greater, as outlined below and detailed more precisely here: $1 increments from
     * $5 to $100 $5 increments from $105 to $1,000 $100 increments from $1,100 to
     * $15,000.
     *
     * @var \Ebay\Sell\Marketing\Model\Amount
     */
    public $amountOffItem = null;

    /**
     * Used for threshold promotions, this is the monetary amount that is discounted
     * off an order when the promotion criteria is met. Because this field is valid
     * only for orders, it's not a valid combination to use with markdown promotions.
     * Valid values for the associated amountOffOrder.value field: &nbsp; 5, 6, 7, 8,
     * 9, 10, 15, 20, 25, &nbsp; 30, 35, 40, 45, 50, 55, 60, 65, &nbsp; 70, 75, 80, 85,
     * 90, 95, 100, 110, &nbsp; 120, 125, 150, 200, 250.
     *
     * @var \Ebay\Sell\Marketing\Model\Amount
     */
    public $amountOffOrder = null;

    /**
     * The percentage applied to the sales price that is discounted off the promoted
     * item (or items) when the promotion criteria is met. Valid integer values for
     * percentage off: &nbsp;&nbsp;Min: 5 &nbsp;&nbsp;Max: 80.
     *
     * @var string
     */
    public $percentageOffItem = null;

    /**
     * Used for threshold promotions, this is the percentage of the order price that is
     * discounted off the order when the promotion criteria is met. This field is not
     * value for markdown promotions. Valid integer values for ORDER_DISCOUNT
     * promotions: &nbsp;&nbsp;Min: 5 &nbsp;&nbsp;Max: 80 For VOLUME_DISCOUNT
     * promotions: Must be set to 0 for the first discount rule.
     *
     * @var string
     */
    public $percentageOffOrder = null;
}
