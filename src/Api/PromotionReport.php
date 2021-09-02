<?php

namespace Ebay\Sell\Marketing\Api;

use Ebay\Sell\Marketing\Model\PromotionsReportPagedCollection as PromotionsReportPagedCollection;
use OpenAPI\Runtime\AbstractAPI as AbstractAPI;

class PromotionReport extends AbstractAPI
{
    /**
     * This method generates a report that lists the seller's running, paused, and
     * ended promotions for the specified eBay marketplace. The result set can be
     * filtered by the promotion status and the number of results to return. You can
     * also supply keywords to limit the report to promotions that contain the
     * specified keywords. Specify the eBay marketplace for which you want the report
     * run using the marketplace_id query parameter. Supply additional query parameters
     * to control the report as needed.
     *
     * @param array $queries options:
     *                       'limit'	string	Specifies the maximum number of promotions returned on a page
     *                       from the result set. Default: 200 Maximum: 200
     *                       'marketplace_id'	string	The eBay marketplace ID of the site for which you want
     *                       the promotions report. Valid values: EBAY_AU = Australia EBAY_DE = Germany
     *                       EBAY_ES = Spain EBAY_FR = France EBAY_GB = Great Britain EBAY_IT = Italy EBAY_US
     *                       = United States
     *                       'offset'	string	Specifies the number of promotions to skip in the result set
     *                       before returning the first promotion in the paginated response. Combine offset
     *                       with the limit query parameter to control the items returned in the response.
     *                       For example, if you supply an offset of 0 and a limit of 10, the first page of
     *                       the response contains the first 10 items from the complete list of items
     *                       retrieved by the call. If offset is 10 and limit is 20, the first page of the
     *                       response contains items 11-30 from the complete result set. Default: 0
     *                       'promotion_status'	string	Limits the results to the promotions that are in the
     *                       state specified by this query parameter. Valid values: DRAFT SCHEDULED RUNNING
     *                       PAUSED ENDEDMaximum number of values supported: 1
     *                       'promotion_type'	string	Filters the returned promotions in the report based on
     *                       their campaign promotion type. Specify one of the following values to indicate
     *                       the promotion type you want returned in the report: CODED_COUPON &ndash; A
     *                       coupon code promotion set with createItemPromotion. MARKDOWN_SALE &ndash; A
     *                       markdown promotion set with createItemPriceMarkdownPromotion. ORDER_DISCOUNT
     *                       &ndash; A threshold promotion set with createItemPromotion. VOLUME_DISCOUNT
     *                       &ndash; A volume pricing promotion set with createItemPromotion.
     *                       'q'	string	A string consisting of one or more keywords. eBay filters the
     *                       response by returning only the promotions that contain the supplied keywords in
     *                       the promotion title. Example: &quot;iPhone&quot; or &quot;Harry Potter.&quot;
     *                       Commas that separate keywords are ignored. For example, a keyword string of
     *                       &quot;iPhone, iPad&quot; equals &quot;iPhone iPad&quot;, and each results in a
     *                       response that contains promotions with both &quot;iPhone&quot; and
     *                       &quot;iPad&quot; in the title.
     *
     * @return PromotionsReportPagedCollection
     */
    public function gets(array $queries = []): PromotionsReportPagedCollection
    {
        return $this->client->request('getPromotionReports', 'GET', 'promotion_report',
            [
                'query' => $queries,
            ]
        );
    }
}
