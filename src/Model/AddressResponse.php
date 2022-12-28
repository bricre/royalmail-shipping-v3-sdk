<?php

namespace RoyalMail\SDK\V3Shipping\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * Response from a create / update or delete address request.
 */
class AddressResponse extends AbstractModel
{
    /**
     * Address Id<br />The Id of the Address involved in the request, or in the case of
     * create, the created Id, if not provided.
     *
     * @var string
     */
    public $AddressId = null;

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
