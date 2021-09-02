<?php

namespace Ebay\Sell\Marketing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type defines the metadata used by the all report types.
 */
class ReportMetadatas extends AbstractModel
{
    /**
     * A list of the metadata for the associated report type.
     *
     * @var \Ebay\Sell\Marketing\Model\ReportMetadata[]
     */
    public $reportMetadata = null;
}
