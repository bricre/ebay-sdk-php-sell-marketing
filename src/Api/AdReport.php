<?php

namespace Ebay\Sell\Marketing\Api;

use OpenAPI\Runtime\AbstractAPI as AbstractAPI;

class AdReport extends AbstractAPI
{
    /**
     * This call downloads the report as specified by the report_id path parameter.
     * Call createReportTask to schedule and generate a Promoted Listings report. All
     * date values are returned in UTC format (yyyy-MM-ddThh:mm:ss.sssZ).
     *
     * @param string $report_id The unique ID of the Promoted Listings report you want
     *                          to get. This ID is generated by eBay when you run a report task with a call to
     *                          createReportTask. Get all the seller's report IDs by calling getReportTasks.
     *
     * @return mixed
     */
    public function getReport(string $report_id)
    {
        return $this->client->request('getReport', 'GET', "ad_report/{$report_id}",
            [
            ]
        );
    }
}
