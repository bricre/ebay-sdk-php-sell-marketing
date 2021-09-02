<?php

namespace Ebay\Sell\Marketing\Api;

use Ebay\Sell\Marketing\Model\PromotionsPagedCollection as PromotionsPagedCollection;
use OpenAPI\Runtime\AbstractAPI as AbstractAPI;

class Promotion extends AbstractAPI
{
    /**
     * This method returns the set of listings associated with the promotion_id
     * specified in the path parameter. Call getPromotions to retrieve the IDs of a
     * seller's promotions. The listing details are returned in a paginated set and you
     * can control and results returned using the following query parameters: limit,
     * offset, q, sort, and status. Maximum associated listings returned: 200 Default
     * number of listings returned: 200.
     *
     * @param string $promotion_id This path parameter takes a concatenation of the ID
     *                             of the promotion you want to get plus the marketplace ID on which the promotion
     *                             is hosted. Concatenate the two values by separating them with an &quot;at
     *                             sign&quot; (@). The ID of the promotion (promotionId) is a unique eBay-assigned
     *                             value that's generated when the promotion is created. The Marketplace ID is the
     *                             ENUM value of eBay marketplace where the promotion is hosted. Example:
     *                             1********5@EBAY_US
     * @param array  $queries      options:
     *                             'limit'	string	Specifies the maximum number of promotions returned on a page
     *                             from the result set. Default: 200 Maximum: 200
     *                             'offset'	string	Specifies the number of promotions to skip in the result set
     *                             before returning the first promotion in the paginated response. Combine offset
     *                             with the limit query parameter to control the items returned in the response.
     *                             For example, if you supply an offset of 0 and a limit of 10, the first page of
     *                             the response contains the first 10 items from the complete list of items
     *                             retrieved by the call. If offset is 10 and limit is 20, the first page of the
     *                             response contains items 11-30 from the complete result set. Default: 0
     *                             'q'	string	Reserved for future use.
     *                             'sort'	string	Specifies the order in which to sort the associated listings in
     *                             the response. If you precede the supplied value with a dash, the response is
     *                             sorted in reverse order. Example: &nbsp;&nbsp;&nbsp;sort=PRICE - Sorts the
     *                             associated listings by their current price in ascending order
     *                             &nbsp;&nbsp;&nbsp;sort=-TITLE - Sorts the associated listings by their title in
     *                             descending alphabetical order (Z-Az-a) Valid values: AVAILABLE PRICE TITLE For
     *                             implementation help, refer to eBay API documentation at
     *                             https://developer.ebay.com/api-docs/sell/marketing/types/csb:SortField
     *                             'status'	string	This query parameter applies only to markdown promotions. It
     *                             filters the response based on the indicated status of the promotion. Currently,
     *                             the only supported value for this parameter is MARKED_DOWN, which indicates
     *                             active markdown promotions. For implementation help, refer to eBay API
     *                             documentation at
     *                             https://developer.ebay.com/api-docs/sell/marketing/types/sme:ItemMarkdownStatusEnum
     *
     * @return mixed
     */
    public function getListingSet(string $promotion_id, array $queries = [])
    {
        return $this->client->request('getListingSet', 'GET', "promotion/{$promotion_id}/get_listing_set",
            [
                'query' => $queries,
            ]
        );
    }

    /**
     * This method returns a list of a seller's undeleted promotions. The call returns
     * up to 200 currently-available promotions on the specified marketplace. While the
     * response body does not include the promotion's discountRules or
     * inventoryCriterion containers, it does include the promotionHref (which you can
     * use to retrieve the complete details of the promotion). Use query parameters to
     * sort and filter the results by the number of promotions to return, the promotion
     * state or type, and the eBay marketplace. You can also supply keywords to limit
     * the response to the promotions that contain that keywords in the title of the
     * promotion. Maximum returned: 200.
     *
     * @param array $queries options:
     *                       'limit'	string	Specifies the maximum number of promotions returned on a page
     *                       from the result set. Default: 200 Maximum: 200
     *                       'marketplace_id'	string	The eBay marketplace ID of the site where the promotion
     *                       is hosted. Valid values: EBAY_AU = Australia EBAY_DE = Germany EBAY_ES = Spain
     *                       EBAY_FR = France EBAY_GB = Great Britain EBAY_IT = Italy EBAY_US = United States
     *                       'offset'	string	Specifies the number of promotions to skip in the result set
     *                       before returning the first promotion in the paginated response. Combine offset
     *                       with the limit query parameter to control the items returned in the response.
     *                       For example, if you supply an offset of 0 and a limit of 10, the first page of
     *                       the response contains the first 10 items from the complete list of items
     *                       retrieved by the call. If offset is 10 and limit is 20, the first page of the
     *                       response contains items 11-30 from the complete result set. Default: 0
     *                       'promotion_status'	string	Specifies the promotion state by which you want to
     *                       filter the results. The response contains only those promotions that match the
     *                       state you specify. Valid values: DRAFT SCHEDULED RUNNING PAUSED ENDEDMaximum
     *                       number of input values: 1
     *                       'promotion_type'	string	Filters the returned promotions based on their campaign
     *                       promotion type. Specify one of the following values to indicate the promotion
     *                       type you want returned: CODED_COUPON &ndash; A coupon code promotion set with
     *                       createItemPromotion. MARKDOWN_SALE &ndash; A markdown promotion set with
     *                       createItemPriceMarkdownPromotion. ORDER_DISCOUNT &ndash; A threshold promotion
     *                       set with createItemPromotion. VOLUME_DISCOUNT &ndash; A volume pricing promotion
     *                       set with createItemPromotion.
     *                       'q'	string	A string consisting of one or more keywords. eBay filters the
     *                       response by returning only the promotions that contain the supplied keywords in
     *                       the promotion title. Example: &quot;iPhone&quot; or &quot;Harry Potter.&quot;
     *                       Commas that separate keywords are ignored. For example, a keyword string of
     *                       &quot;iPhone, iPad&quot; equals &quot;iPhone iPad&quot;, and each results in a
     *                       response that contains promotions with both &quot;iPhone&quot; and
     *                       &quot;iPad&quot; in the title.
     *                       'sort'	string	Specifies the order for how to sort the response. If you precede
     *                       the supplied value with a dash, the response is sorted in reverse order.
     *                       Example: &nbsp;&nbsp;&nbsp;sort=END_DATE &nbsp; Sorts the promotions in the
     *                       response by their end dates in ascending order
     *                       &nbsp;&nbsp;&nbsp;sort=-PROMOTION_NAME &nbsp; Sorts the promotions by their
     *                       promotion name in descending alphabetical order (Z-Az-a) Valid values:
     *                       START_DATE END_DATE PROMOTION_NAME For implementation help, refer to eBay API
     *                       documentation at
     *                       https://developer.ebay.com/api-docs/sell/marketing/types/csb:SortField
     *
     * @return PromotionsPagedCollection
     */
    public function gets(array $queries = []): PromotionsPagedCollection
    {
        return $this->client->request('getPromotions', 'GET', 'promotion',
            [
                'query' => $queries,
            ]
        );
    }

    /**
     * This method pauses a currently-active (RUNNING) threshold promotion and changes
     * the state of the promotion from RUNNING to PAUSED. Pausing a promotion makes the
     * promotion temporarily unavailable to buyers and any currently-incomplete
     * transactions will not receive the promotional offer until the promotion is
     * resumed. Also, promotion teasers are not displayed when a promotion is paused.
     * Pass the ID of the promotion you want to pause using the promotion_id path
     * parameter. Call getPromotions to retrieve the IDs of the seller's promotions.
     * Note: You can only pause threshold promotions (you cannot pause markdown
     * promotions).
     *
     * @param string $promotion_id This path parameter takes a concatenation of the ID
     *                             of the promotion you want to pause plus the marketplace ID on which the
     *                             promotion is hosted. Concatenate the two values by separating them with an
     *                             &quot;at sign&quot; (@). The ID of the promotion (promotionId) is a unique
     *                             eBay-assigned value that's generated when the promotion is created. The
     *                             Marketplace ID is the ENUM value of eBay marketplace where the promotion is
     *                             hosted. Example: 1********5@EBAY_US
     *
     * @return mixed
     */
    public function pause(string $promotion_id)
    {
        return $this->client->request('pausePromotion', 'POST', "promotion/{$promotion_id}/pause",
            [
            ]
        );
    }

    /**
     * This method restarts a threshold promotion that was previously paused and
     * changes the state of the promotion from PAUSED to RUNNING. Only promotions that
     * have been previously paused can be resumed. Resuming a promotion reinstates the
     * promotional teasers and any transactions that were in motion before the
     * promotion was paused will again be eligible for the promotion. Pass the ID of
     * the promotion you want to resume using the promotion_id path parameter. Call
     * getPromotions to retrieve the IDs of the seller's promotions.
     *
     * @param string $promotion_id This path parameter takes a concatenation of the ID
     *                             of the promotion you want to resume plus the marketplace ID on which the
     *                             promotion is hosted. Concatenate the two values by separating them with an
     *                             &quot;at sign&quot; (@). The ID of the promotion (promotionId) is a unique
     *                             eBay-assigned value that's generated when the promotion is created. The
     *                             Marketplace ID is the ENUM value of eBay marketplace where the promotion is
     *                             hosted. Example: 1********5@EBAY_US
     *
     * @return mixed
     */
    public function resume(string $promotion_id)
    {
        return $this->client->request('resumePromotion', 'POST', "promotion/{$promotion_id}/resume",
            [
            ]
        );
    }
}
