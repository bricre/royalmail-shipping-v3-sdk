<?php

namespace RoyalMail\SDK\V3Shipping\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * Response from a create manifest request.
 */
class ManifestResponse extends AbstractModel
{
    /**
     * Posting Location.<br />The Posting Location manifested.
     *
     * @var string
     */
    public $PostingLocation = null;

    /**
     * The Created Manifests<br />Only populated if the request was successful.
     *
     * @var \RoyalMail\SDK\V3Shipping\Model\Manifest[]
     */
    public $Manifests = null;

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
