<?php

namespace Ebay\Sell\Marketing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type defines the fields returned in an error condition.
 */
class Error extends AbstractModel
{
    /**
     * The category type for this error or warning. This field can have one of three
     * values: Application: Indicates an exception or error occurred in the application
     * code or at runtime. Examples include catching an exception in a service's
     * business logic, system failures, or request errors from a dependency. Business:
     * Used when your service or a dependent service refused to continue processing on
     * the resource because of a business rule violation such as &quot;Seller does not
     * ship items to Antarctica&quot; or &quot;Buyer ineligible to purchase an
     * alcoholic item&quot;. Business errors are not syntactical input errors. Request:
     * Used when there is anything wrong with the request, such as authentication,
     * syntactical errors, rate limiting or missing headers, bad HTTP header values,
     * and so on.
     *
     * @var string
     */
    public $category = null;

    /**
     * The name of the primary system where the error occurred. This is relevant for
     * application errors.
     *
     * @var string
     */
    public $domain = null;

    /**
     * A positive integer that uniquely identifies the specific error condition that
     * occurred. Your application can use error codes as identifiers in your customized
     * error-handling algorithms.
     *
     * @var int
     */
    public $errorId = null;

    /**
     * An array of reference IDs that identify the specific request elements most
     * closely associated to the error or warning, if any. For JSON, use JSONPath
     * notation.
     *
     * @var string[]
     */
    public $inputRefIds = null;

    /**
     * A detailed description of the condition that caused the error or warning and
     * information on what to do to correct the problem. The string is normally 100-200
     * characters in length, but is not required to be such.
     *
     * @var string
     */
    public $longMessage = null;

    /**
     * A short description of the condition that caused the error or warning. This
     * value is at most 50 characters long and, if applicable, is localized in the end
     * user's requested locale.
     *
     * @var string
     */
    public $message = null;

    /**
     * An array of reference IDs that identify the specific response elements most
     * closely associated to the error or warning, if any. The path format is the same
     * as inputRefId.
     *
     * @var string[]
     */
    public $outputRefIds = null;

    /**
     * An array that contains contextual information about the error or warning. The
     * list often includes the parameter or input fields that triggered the warning or
     * error condition.
     *
     * @var \Ebay\Sell\Marketing\Model\ErrorParameter[]
     */
    public $parameters = null;

    /**
     * The name of the subdomain in which the error or warning occurred. For example,
     * checkout is a subdomain in the buying domain.
     *
     * @var string
     */
    public $subdomain = null;
}
