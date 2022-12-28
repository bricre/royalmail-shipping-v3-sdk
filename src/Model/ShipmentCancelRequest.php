<?php

namespace RoyalMail\SDK\V3Shipping\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * A request to cancel a shipment.
 */
class ShipmentCancelRequest extends AbstractModel
{
    /**
     * Shipment Id<br />The tracking number or Unique Id of the shipment to cancel.
     *
     * @var string
     */
    public $ShipmentId = null;

    /**
     * Reason for Cancellation.
     *
     * @var string
     */
    public $ReasonForCancellation = null;
}
