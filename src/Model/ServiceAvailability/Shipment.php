<?php

namespace RoyalMail\SDK\V3Shipping\Model\ServiceAvailability;

use OpenAPI\Runtime\AbstractModel;

/**
 * Details of a shipment for a service availability check.
 */
class Shipment extends AbstractModel
{
    /**
     * The Destination<br />Where the parcel is going to.
     *
     * @var \RoyalMail\SDK\V3Shipping\Model\ServiceAvailability\Destination
     */
    public $Destination = null;

    /**
     * Shipment Information<br />Overall package details and requested service
     * requirements.
     *
     * @var \RoyalMail\SDK\V3Shipping\Model\ServiceAvailability\ShipmentInformation
     */
    public $ShipmentInformation = null;
}
