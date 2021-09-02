<?php

namespace Ebay\Sell\Marketing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type defines the dimension used to create the report and the annotation
 * keys associated with that dimension.
 */
class DimensionMetadata extends AbstractModel
{
    /**
     * The data type of the dimension value used to create the report. For
     * implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/marketing/types/plr:DataTypeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $dataType = null;

    /**
     * The name of the dimension used to create the report.
     *
     * @var string
     */
    public $dimensionKey = null;

    /**
     * An list of annotation keys associated with the specified dimension of the
     * report.
     *
     * @var \Ebay\Sell\Marketing\Model\DimensionKeyAnnotation[]
     */
    public $dimensionKeyAnnotations = null;
}
