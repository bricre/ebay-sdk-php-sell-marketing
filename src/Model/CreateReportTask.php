<?php

namespace Ebay\Sell\Marketing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type defines the rules that govern the generation of a report task and the
 * criteria that's used to create the report. The report-generation rules include
 * the starting and ending dates for the report. Report-task criteria includes the
 * report dimensions, metrics, listings covered in the report, and so on. For
 * information on the required and optional fields for each report type, see
 * Reading Promoted Listings reports.
 */
class CreateReportTask extends AbstractModel
{
    /**
     * A list of campaign IDs to be included in the report task. Call getCampaigns to
     * get a list of the current campaign IDs for a seller. Note: The API currently
     * supports only a single campaign ID per report task. Maximum: 1 Required if
     * reportType is set to CAMPAIGN_PERFORMANCE_REPORT or
     * CAMPAIGN_PERFORMANCE_SUMMARY_REPORT.
     *
     * @var string[]
     */
    public $campaignIds = null;

    /**
     * The date defining the start of the timespan covered by the report. Format the
     * timestamp as an ISO 8601 string, which is based on the 24-hour Coordinated
     * Universal Time (UTC) clock with local offset. Note: The date specified cannot be
     * a future date. Format: [YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z Example:
     * 2021-03-15T13:00:00-07:00.
     *
     * @var string
     */
    public $dateFrom = null;

    /**
     * The date defining the end of the timespan covered by the report. As with the
     * dateFrom field, format the timestamp as an ISO 8601 string. Note: The date
     * specified cannot be a future date. Additionally, the time specified must be a
     * later time than that specified in the dateFrom field. Format:
     * [YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z Example: 2021-03-17T13:00:00-07:00.
     *
     * @var string
     */
    public $dateTo = null;

    /**
     * The list of the dimensions applied to the report. A dimension is an attribute to
     * which the report data applies. For example, if you set dimensionKey to
     * campaign_id in a Campaign Performance Report, the data will apply to the entire
     * ad campaign. For information on the dimensions and how to specify them, see
     * Reading Promoted Listings reports.
     *
     * @var \Ebay\Sell\Marketing\Model\Dimension[]
     */
    public $dimensions = null;

    /**
     * You can use this field to supply an array of items to include in the report if
     * you manage your inventory with the Inventory API. This field is mutually
     * exclusive with the listingIds field; if you populate this field, do not populate
     * the listingIds field. An inventory reference identifies an item in your
     * inventory using a pair of values, where the inventoryReferenceId can be either a
     * seller-defined SKU value or an inventoryItemGroupKey, where an
     * inventoryItemGroupKey is seller-defined ID for an inventory item group (a
     * multiple-variation listing). Couple the inventoryReferenceId with an
     * inventoryReferenceType identifier to fully identify an item in your inventory.
     * Maximum: 500 items Required if you do not supply an array of listingId values or
     * if you set reportType to INVENTORY_PERFORMANCE_REPORT.
     *
     * @var \Ebay\Sell\Marketing\Model\InventoryReference[]
     */
    public $inventoryReferences = null;

    /**
     * Use this field to supply a array of the listing ID you want to include in the
     * report. This field is mutually exclusive with the inventoryReferences field; if
     * you populate this field, do not populate the inventoryReferences field. A
     * listing ID is the eBay listing identifier that's generated when the listing is
     * created. Note: This field accepts listingId values generated with both the
     * Inventory API and the eBay Traditional APIs, such as the Trading and Finding
     * APIs. Maximum: 500 listings Required if you do not supply an array of
     * inventoryReferences values or if you set reportType to
     * LISTING_PERFORMANCE_REPORT.
     *
     * @var string[]
     */
    public $listingIds = null;

    /**
     * The ID for the eBay marketplace on which the report is based. Maximum: 1
     * Required if reportType is set to ACCOUNT_PERFORMANCE_REPORT or
     * INVENTORY_PERFORMANCE_REPORT. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/marketing/types/ba:MarketplaceIdEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $marketplaceId = null;

    /**
     * The list of metrics to be included in the report. Metrics are the quantitative
     * measurements compiled into the report and the data returned is based on the
     * specified dimension of the report. For example, if the dimension is campaign,
     * the metrics for number of sales would be the number of sales in the campaign.
     * However, if the dimension is listing, the number of sales represents the number
     * of items sold in that listing. For information on metric keys and how to set
     * them, see Reading Promoted Listings reports.Minimum: 1.
     *
     * @var string[]
     */
    public $metricKeys = null;

    /**
     * The file format of the report. Currently, the only supported format is TSV_GZIP,
     * which is a gzip file with tab separated values. For implementation help, refer
     * to <a
     * href='https://developer.ebay.com/api-docs/sell/marketing/types/plr:ReportFormatEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $reportFormat = null;

    /**
     * The type of report to be generated, such as ACCOUNT_PERFORMANCE_REPORT,
     * CAMPAIGN_PERFORMANCE_REPORT, and so on. Maximum: 1 For implementation help,
     * refer to <a
     * href='https://developer.ebay.com/api-docs/sell/marketing/types/plr:ReportTypeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $reportType = null;
}
