<?php

namespace Ebay\Sell\Marketing\Api;

use Ebay\Sell\Marketing\Model\SummaryReportResponse as SummaryReportResponse;
use OpenAPI\Runtime\AbstractAPI as AbstractAPI;

class PromotionSummaryReport extends AbstractAPI
{
    /**
     * This method generates a report that summarizes the seller's promotions for the
     * specified eBay marketplace. The report returns information on RUNNING, PAUSED,
     * and ENDED promotions (deleted reports are not returned) and summarizes the
     * seller's campaign performance for all promotions on a given site. For
     * information about summary reports, see Reading the item promotion Summary
     * report.
     *
     * @param array $queries options:
     *                       'marketplace_id'	string	The eBay marketplace ID of the site you for which you
     *                       want a promotion summary report. Valid values: EBAY_AU = Australia EBAY_DE =
     *                       Germany EBAY_ES = Spain EBAY_FR = France EBAY_GB = Great Britain EBAY_IT = Italy
     *                       EBAY_US = United States
     *
     * @return SummaryReportResponse
     */
    public function get(array $queries = []): SummaryReportResponse
    {
        return $this->client->request('getPromotionSummaryReport', 'GET', 'promotion_summary_report',
            [
                'query' => $queries,
            ]
        );
    }
}
