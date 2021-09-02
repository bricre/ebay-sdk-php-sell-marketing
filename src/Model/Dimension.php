<?php

namespace Ebay\Sell\Marketing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type defines the annotation and dimension key used by the report. For
 * information on how to set these values, see Reading Promoted Listings reports.
 */
class Dimension extends AbstractModel
{
    /**
     * A list of annotations associated with the dimension of the report.
     *
     * @var string[]
     */
    public $annotationKeys = null;

    /**
     * The name of the dimension on which the report is based. A dimension is an
     * attribute to which the report data applies.
     *
     * @var string
     */
    public $dimensionKey = null;
}
