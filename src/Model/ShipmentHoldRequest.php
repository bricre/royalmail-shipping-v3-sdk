<?php

namespace RoyalMail\SDK\V3Shipping\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * A request to hold a shipment.
 */
class ShipmentHoldRequest extends AbstractModel
{
    /**
     * Shipment Id<br />The tracking number or Unique Id of the shipment to hold.
     *
     * @var string
     */
    public $ShipmentId = null;

    /**
     * Reason for Hold<br />Must match a Hold Reason set in Pro Shipping Maintenance /
     * Hold Reasons.
     *
     * @var string
     */
    public $ReasonForHold = null;
}
