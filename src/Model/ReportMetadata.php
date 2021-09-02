<?php

namespace Ebay\Sell\Marketing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type defines the fields included in the report.
 */
class ReportMetadata extends AbstractModel
{
    /**
     * A list containing the metadata for the dimension used in the report.
     *
     * @var \Ebay\Sell\Marketing\Model\DimensionMetadata[]
     */
    public $dimensionMetadata = null;

    /**
     * The maximum number of dimensions that can be requested for the specified report
     * type.
     *
     * @var int
     */
    public $maxNumberOfDimensionsToRequest = null;

    /**
     * The maximum number of metrics that can be requested for the specified report
     * type.
     *
     * @var int
     */
    public $maxNumberOfMetricsToRequest = null;

    /**
     * A list containing the metadata for the metrics in the report.
     *
     * @var \Ebay\Sell\Marketing\Model\MetricMetadata[]
     */
    public $metricMetadata = null;

    /**
     * The report_type, as specified in the request to create the report task. For
     * implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/marketing/types/plr:ReportTypeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $reportType = null;
}
