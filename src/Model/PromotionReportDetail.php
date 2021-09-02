<?php

namespace Ebay\Sell\Marketing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type defines the fields in a promotion-level report.
 */
class PromotionReportDetail extends AbstractModel
{
    /**
     * The average item discount is the average discount that has been applied to each
     * item in a promotion. This value is calculated as follows: totalDiscount /
     * itemsSoldQuantity = averageItemDiscount.
     *
     * @var \Ebay\Sell\Marketing\Model\Amount
     */
    public $averageItemDiscount = null;

    /**
     * The average item revenue is the average revenue that has been received for each
     * item in a promotion. This value is calculated as follows: totalSales /
     * itemsSoldQuantity = averageItemRevenue.
     *
     * @var \Ebay\Sell\Marketing\Model\Amount
     */
    public $averageItemRevenue = null;

    /**
     * The average order discount is the average discount that has been applied to each
     * order in a promotion. This value is calculated as follows: totalDiscount /
     * numberOfOrdersSold = averageOrderDiscount.
     *
     * @var \Ebay\Sell\Marketing\Model\Amount
     */
    public $averageOrderDiscount = null;

    /**
     * The average order revenue is the average revenue that has been received for each
     * order in a promotion. This value is calculated as follows: totalSales /
     * numberOfOrdersSold = averageOrderRevenue.
     *
     * @var \Ebay\Sell\Marketing\Model\Amount
     */
    public $averageOrderRevenue = null;

    /**
     * The average order size is the average number of items that each order contained
     * in a promotion. This value is calculated as follows: itemsSoldQuantity /
     * numberOfOrdersSold = averageOrderSize.
     *
     * @var string
     */
    public $averageOrderSize = null;

    /**
     * This is the monetary amount of items purchased in a promotion where the
     * threshold wasn't met, so the discount was not applied. For example, suppose
     * you're running a &quot;Buy 1, get 1 at 50%&quot; promotion on $5 socks. One
     * buyer purchased only one pair of socks, so they pay the full price of $5. Here,
     * your baseSale amount would be $5.
     *
     * @var \Ebay\Sell\Marketing\Model\Amount
     */
    public $baseSale = null;

    /**
     * This is the quantity of items purchased in a threshold promotion where the
     * threshold has been met and the discount was applied. For example, suppose you're
     * running a &quot;Buy 1, get 1 at 50%&quot; promotion on $5 socks. One buyer
     * purchases two pairs of socks, so they pay $7.50 for both pairs (rather than the
     * full price of $10). Your number of items sold (itemsSoldQuantity) would be 2 and
     * you number of orders sold (numberOfOrdersSold) would be 1.
     *
     * @var int
     */
    public $itemsSoldQuantity = null;

    /**
     * This is the number of orders sold in a threshold promotion where the threshold
     * has been met and the discount was applied. For example, suppose you're running a
     * &quot;Buy 1, get 1 at 50%&quot; promotion on $5 socks. One buyer purchases two
     * pairs of socks, so they pay $7.50 for both pairs (rather than the full price of
     * $10). Your numberOfOrdersSold would be 1 and your itemsSoldQuantity would be 2.
     *
     * @var int
     */
    public $numberOfOrdersSold = null;

    /**
     * The percentage sales lift is the total dollar amount gained due to promotions.
     * This value is calculated as follows: promotionSale / totalSale =
     * percentageSalesLift.
     *
     * @var string
     */
    public $percentageSalesLift = null;

    /**
     * The URI of the promotion report.
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
     * The unique eBay-assigned ID of the promotion report that is generated when the
     * report is created.
     *
     * @var string
     */
    public $promotionReportId = null;

    /**
     * This is the monetary amount of the items sold in a threshold promotion where the
     * threshold has been met and the discount was applied. For example, suppose you're
     * running a &quot;Buy 1, get 1 at 50%&quot; promotion on $5 socks. One buyer
     * purchases two pairs of socks, so they pay $7.50 for both pairs (rather than the
     * full price of $10). Your promotionSale amount would be $7.50.
     *
     * @var \Ebay\Sell\Marketing\Model\Amount
     */
    public $promotionSale = null;

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
     * This is the monetary discount amount applied to the sale of items in a threshold
     * promotion where the threshold has been met and the discount was applied. For
     * example, suppose you're running a &quot;Buy 1, get 1 at 50%&quot; promotion on
     * $5 socks. One buyer purchases two pairs of socks, so they pay $7.50 for both
     * pairs (rather than the full price of $10). Your totalDiscount amount would be
     * $2.50.
     *
     * @var \Ebay\Sell\Marketing\Model\Amount
     */
    public $totalDiscount = null;

    /**
     * This is the total monetary sales amount of all items sold in a promotion. For
     * example, suppose you're running a &quot;Buy 1, get 1 at 50%&quot; promotion on
     * $5 socks. You make one sale where the buyer purchases only one pair of socks and
     * they pay the full price of $5 (baseSale). You make a second sale where the buyer
     * purchases two pairs of socks and they pay $7.50, for both pairs (promotionSale).
     * Your totalSale would be $12.50. This value is calculated as follows: baseSale +
     * promotionSale = totalSale.
     *
     * @var \Ebay\Sell\Marketing\Model\Amount
     */
    public $totalSale = null;
}
