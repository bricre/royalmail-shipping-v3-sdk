<?php

namespace RoyalMail\SDK\V3Shipping\Model\CreateShipment;

use OpenAPI\Runtime\AbstractModel;

/**
 * Details of a shipment request.
 */
class Shipment extends AbstractModel
{
    /**
     * The Shipper<br />Who and where the parcel is coming from.<br />Optional. If not
     * supplied, the posting location address will be used.<br />*Whether this is
     * required or not is dependent on your account settings.
     *
     * @var \RoyalMail\SDK\V3Shipping\Model\Shipper
     */
    public $Shipper = null;

    /**
     * The Destination<br />Who and where the parcel is going to.<br />It is the
     * shipper???s responsibility to provide accurate and concise information to ensure
     * the best possible delivery experience for the consumer.
     *
     * @var \RoyalMail\SDK\V3Shipping\Model\CreateShipment\Destination
     */
    public $Destination = null;

    /**
     * Shipment Information<br />Overall package details and requested service
     * information.
     *
     * @var \RoyalMail\SDK\V3Shipping\Model\CreateShipment\ShipmentInformation
     */
    public $ShipmentInformation = null;

    /**
     * Customs Information.
     *
     * @var \RoyalMail\SDK\V3Shipping\Model\CreateShipment\CustomsInformation
     */
    public $CustomsInformation = null;
}
