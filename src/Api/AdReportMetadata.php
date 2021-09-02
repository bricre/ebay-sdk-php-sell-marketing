<?php

namespace Ebay\Sell\Marketing\Api;

use Ebay\Sell\Marketing\Model\ReportMetadata as ReportMetadata;
use Ebay\Sell\Marketing\Model\ReportMetadatas as ReportMetadatas;
use OpenAPI\Runtime\AbstractAPI as AbstractAPI;

class AdReportMetadata extends AbstractAPI
{
    /**
     * This call retrieves information that details the fields used in each of the
     * Promoted Listings reports. Use the returned information to configure the
     * different types of Promoted Listings reports. The request for this method does
     * not use a payload or any URI parameters.
     *
     * @return ReportMetadatas
     */
    public function getReportMetadata(): ReportMetadatas
    {
        return $this->client->request('getReportMetadata', 'GET', 'ad_report_metadata',
            [
            ]
        );
    }

    /**
     * This call retrieves metadata that details the fields used by a specific Promoted
     * Listings report type. Use the report_type path parameter to indicate metadata to
     * retrieve. This method does not use a request payload.
     *
     * @param string $report_type The name of the report type whose metadata you want
     *                            to get. For details about each report type, see ReportTypeEnum. Valid values:
     *                            &nbsp;&nbsp;&nbsp;ACCOUNT_PERFORMANCE_REPORT
     *                            &nbsp;&nbsp;&nbsp;CAMPAIGN_PERFORMANCE_REPORT
     *                            &nbsp;&nbsp;&nbsp;CAMPAIGN_PERFORMANCE_SUMMARY_REPORT
     *                            &nbsp;&nbsp;&nbsp;LISTING_PERFORMANCE_REPORT
     *                            &nbsp;&nbsp;&nbsp;INVENTORY_PERFORMANCE_REPORT
     *
     * @return ReportMetadata
     */
    public function getReportMetadataForReportType(string $report_type): ReportMetadata
    {
        return $this->client->request('getReportMetadataForReportType', 'GET', "ad_report_metadata/{$report_type}",
            [
            ]
        );
    }
}
