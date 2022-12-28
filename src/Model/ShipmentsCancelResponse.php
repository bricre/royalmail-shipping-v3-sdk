<?php

namespace RoyalMail\SDK\V3Shipping\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * Response from a cancel shipments request.
 */
class ShipmentsCancelResponse extends AbstractModel
{
    /**
     * Shipment Ids<br />Tracking Numbers / Unique Ids of each shipment involved in the
     * request.
     *
     * @var string[]|
     */
    public $ShipmentIds = null;

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
