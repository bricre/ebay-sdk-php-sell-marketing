<?php

namespace Ebay\Sell\Marketing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type defines the fields in a paginated result set of promotion-level
 * reports. The response consists of 0 or more sequenced pages that are returned
 * from the complete result set, where each page consists of 0 or more items.
 */
class PromotionsReportPagedCollection extends AbstractModel
{
    /**
     * The URI of the current page of results from the result set.
     *
     * @var string
     */
    public $href = null;

    /**
     * The number of items returned on a single page from the result set. This value
     * can be set in the request with the limit query parameter.
     *
     * @var int
     */
    public $limit = null;

    /**
     * The URI for the following page of results. This value is returned only if there
     * is an additional page of results to display from the result set. Max length:
     * 2048.
     *
     * @var string
     */
    public $next = null;

    /**
     * The number of results skipped in the result set before listing the first
     * returned result. This value can be set in the request with the offset query
     * parameter. Note: The items in a paginated result set use a zero-based list where
     * the first item in the list has an offset of 0.
     *
     * @var int
     */
    public $offset = null;

    /**
     * The URI for the preceding page of results. This value is returned only if there
     * is a previous page of results to display from the result set. Max length: 2048.
     *
     * @var string
     */
    public $prev = null;

    /**
     * A list of promotionReports contained in the paginated result set.
     *
     * @var \Ebay\Sell\Marketing\Model\PromotionReportDetail[]
     */
    public $promotionReports = null;

    /**
     * The total number of items retrieved in the result set. If no items are found,
     * this field is returned with a value of 0.
     *
     * @var int
     */
    public $total = null;
}
