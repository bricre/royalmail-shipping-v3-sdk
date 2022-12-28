<?php

namespace RoyalMail\SDK\V3Shipping\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * A request to defer a shipment to a later date.
 */
class ShipmentDeferRequest extends AbstractModel
{
    /**
     * Shipment Id<br />The tracking number or Unique Id of the shipment to defer.
     *
     * @var string
     */
    public $ShipmentId = null;

    /**
     * Shipment Date<br />Date of despatch ??? YYYY-MM-DD<br />Cannot be in the past.
     * Max 28 days in the future.
     *
     * @var string
     */
    public $ShipmentDate = null;
}
