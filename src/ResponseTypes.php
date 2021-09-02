<?php

namespace Ebay\Sell\Marketing;

use OpenAPI\Runtime\ResponseTypes as AbstractResponseTypes;

class ResponseTypes extends AbstractResponseTypes
{
    public static $types = [
        'bulkCreateAdsByInventoryReference' => [
            '200.' => 'Ebay\\Sell\\Marketing\\Model\\BulkCreateAdsByInventoryReferenceResponse',
        ],
        'bulkCreateAdsByListingId' => [
            '200.' => 'Ebay\\Sell\\Marketing\\Model\\BulkAdResponse',
        ],
        'bulkDeleteAdsByInventoryReference' => [
            '200.' => 'Ebay\\Sell\\Marketing\\Model\\BulkDeleteAdsByInventoryReferenceResponse',
        ],
        'bulkDeleteAdsByListingId' => [
            '200.' => 'Ebay\\Sell\\Marketing\\Model\\BulkDeleteAdResponse',
        ],
        'bulkUpdateAdsBidByInventoryReference' => [
            '200.' => 'Ebay\\Sell\\Marketing\\Model\\BulkCreateAdsByInventoryReferenceResponse',
        ],
        'bulkUpdateAdsBidByListingId' => [
            '200.' => 'Ebay\\Sell\\Marketing\\Model\\BulkAdResponse',
        ],
        'getAds' => [
            '200.' => 'Ebay\\Sell\\Marketing\\Model\\AdPagedCollection',
        ],
        'createAdByListingId' => [
            '201.' => null,
        ],
        'createAdsByInventoryReference' => [
            '201.' => 'Ebay\\Sell\\Marketing\\Model\\AdReferences',
        ],
        'getAd' => [
            '200.' => 'Ebay\\Sell\\Marketing\\Model\\Ad',
        ],
        'deleteAdsByInventoryReference' => [
            '200.' => 'Ebay\\Sell\\Marketing\\Model\\AdIds',
        ],
        'getAdsByInventoryReference' => [
            '200.' => 'Ebay\\Sell\\Marketing\\Model\\Ads',
        ],
        'cloneCampaign' => [
            '201.' => null,
        ],
        'getCampaigns' => [
            '200.' => 'Ebay\\Sell\\Marketing\\Model\\CampaignPagedCollection',
        ],
        'createCampaign' => [
            '201.' => null,
        ],
        'getCampaign' => [
            '200.' => 'Ebay\\Sell\\Marketing\\Model\\Campaign',
        ],
        'findCampaignByAdReference' => [
            '200.' => 'Ebay\\Sell\\Marketing\\Model\\Campaigns',
        ],
        'getCampaignByName' => [
            '200.' => 'Ebay\\Sell\\Marketing\\Model\\Campaign',
        ],
        'getReportMetadata' => [
            '200.' => 'Ebay\\Sell\\Marketing\\Model\\ReportMetadatas',
        ],
        'getReportMetadataForReportType' => [
            '200.' => 'Ebay\\Sell\\Marketing\\Model\\ReportMetadata',
        ],
        'getReportTasks' => [
            '200.' => 'Ebay\\Sell\\Marketing\\Model\\ReportTaskPagedCollection',
        ],
        'getReportTask' => [
            '200.' => 'Ebay\\Sell\\Marketing\\Model\\ReportTask',
        ],
        'createItemPriceMarkdownPromotion' => [
            '201.' => null,
        ],
        'getItemPriceMarkdownPromotion' => [
            '200.' => 'Ebay\\Sell\\Marketing\\Model\\ItemPriceMarkdown',
        ],
        'updateItemPriceMarkdownPromotion' => [
            '200.' => null,
        ],
        'createItemPromotion' => [
            '201.' => 'Ebay\\Sell\\Marketing\\Model\\BaseResponse',
        ],
        'getItemPromotion' => [
            '200.' => 'Ebay\\Sell\\Marketing\\Model\\ItemPromotionResponse',
        ],
        'updateItemPromotion' => [
            '200.' => 'Ebay\\Sell\\Marketing\\Model\\BaseResponse',
        ],
        'getPromotions' => [
            '200.' => 'Ebay\\Sell\\Marketing\\Model\\PromotionsPagedCollection',
        ],
        'getPromotionReports' => [
            '200.' => 'Ebay\\Sell\\Marketing\\Model\\PromotionsReportPagedCollection',
        ],
        'getPromotionSummaryReport' => [
            '200.' => 'Ebay\\Sell\\Marketing\\Model\\SummaryReportResponse',
        ],
    ];
}
