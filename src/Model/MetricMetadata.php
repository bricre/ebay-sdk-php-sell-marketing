<?php

namespace Ebay\Sell\Marketing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type defines the name and data type of a metric.
 */
class MetricMetadata extends AbstractModel
{
    /**
     * The data type of the returned metric value. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/marketing/types/plr:DataTypeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $dataType = null;

    /**
     * The name of the metric.
     *
     * @var string
     */
    public $metricKey = null;
}
