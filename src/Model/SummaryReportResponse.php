<?php

namespace Ebay\Sell\Marketing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type defines the fields in an Promotions Manager Summary report. Reports
 * are formatted in JSON. For more details, see Reading item promotion Summary
 * reports.
 */
class SummaryReportResponse extends AbstractModel
{
    /**
     * The total revenue from all the purchased items that were part of a promotion but
     * did not trigger a discount during the promotion period.
     *
     * @var \Ebay\Sell\Marketing\Model\Amount
     */
    public $baseSale = null;

    /**
     * The date the report was generated.
     *
     * @var string
     */
    public $lastUpdated = null;

    /**
     * The percentage of the total dollar amount gained due to promotions. This value
     * is calculated as follows: precentageSalesLift = promotionSale / (baseSale +
     * promotionSale).
     *
     * @var string
     */
    public $percentageSalesLift = null;

    /**
     * The total revenue from all the purchased items that were part of a promotion and
     * their purchase did trigger a discount during the promotion period.
     *
     * @var \Ebay\Sell\Marketing\Model\Amount
     */
    public $promotionSale = null;

    /**
     * Total dollar sales amount of all the seller's listings, current to the date the
     * report was generated.
     *
     * @var \Ebay\Sell\Marketing\Model\Amount
     */
    public $totalSale = null;
}
