<?php

namespace RoyalMail\SDK\V3Shipping\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * Response from a delete packaging details request.
 */
class PackagingResponse extends AbstractModel
{
    /**
     * Packaging Id<br />The Id of the Packaging Details involved in the request.
     *
     * @var string
     */
    public $PackagingId = null;

    /**
     * HTTP Status Code.
     *
     * @var int
     */
    public $HttpStatusCode = null;

    /**
     * HTTP Status Description.
     *
     * @var string
     */
    public $HttpStatusDescription = null;

    /**
     * Message<br />Successful response may include a success message.<br />Failure
     * responses will have general reason as to why. Further details may be contained
     * in the list of errors.
     *
     * @var string
     */
    public $Message = null;

    /**
     * Errors<br />Details about why a request failed.
     *
     * @var \RoyalMail\SDK\V3Shipping\Model\ErrorDetail[]
     */
    public $Errors = null;
}
