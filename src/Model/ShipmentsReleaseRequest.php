<?php

namespace RoyalMail\SDK\V3Shipping\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * Request to release 1 or more shipments from hold.
 */
class ShipmentsReleaseRequest extends AbstractModel
{
    /**
     * Shipment Ids<br />Tracking Numbers / Unique Ids of each shipment to release from
     * hold.
     *
     * @var string[]|
     */
    public $ShipmentIds = null;
}
