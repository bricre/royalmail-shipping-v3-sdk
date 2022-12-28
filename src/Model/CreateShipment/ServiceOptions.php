<?php

namespace RoyalMail\SDK\V3Shipping\Model\CreateShipment;

use OpenAPI\Runtime\AbstractModel;

/**
 * The Service Options for a Royal Mail Shipment, used in a shipment request.<br
 * />Required if have more than 1 possible Posting Location.
 */
class ServiceOptions extends AbstractModel
{
    /**
     * Posting Location.<br />Optional if you only have 1 Posting Location.
     *
     * @var string
     */
    public $PostingLocation = null;

    /**
     * Service Level<br />Valid values are 01-99.<br />Defaults to lowest service level
     * if not provided.
     *
     * @var string
     */
    public $ServiceLevel = null;

    /**
     * Service Format<br />            <br />**L** - Letter<br />**F** - Large
     * Letter<br />**P** - Parcel<br />**S** - Printed Papers - International Services
     * Only.
     *
     * @var string
     */
    public $ServiceFormat = null;

    /**
     * Safe Place Enhancement<br />Free text to describe a safe place to leave the
     * parcel.<br />Returns an error if the service does not allow Safeplace.
     *
     * @var string
     */
    public $Safeplace = null;

    /**
     * Saturday Guaranteed Enhancement<br />Available for Domestic Special Delivery
     * Services Only<br />Returns an error if requested and the service does not allow
     * it.
     *
     * @var bool
     */
    public $SaturdayGuaranteed = null;

    /**
     * Consequential Loss Enhancement<br />Available for Domestic Special Delivery
     * Services Only.<br />            <br />**Level1** - ??1,000<br />**Level2** -
     * ??2,500<br />**Level3** - ??5,000<br />**Level4** - ??7,500<br />**Level5** -
     * ??10,000<br />            <br />Returns an error if requested and the service
     * does not allow it.
     *
     * @var string
     */
    public $ConsequentialLoss = null;

    /**
     * Local Collect Enhancement<br />Available for Domestic Special Delivery and
     * Domestic Tracked services only.<br />Returns an error if requested and the
     * service does not allow it.
     *
     * @var bool
     */
    public $LocalCollect = null;

    /**
     * Tracking Notifications Enhancement<br />Available for Domestic Special Delivery
     * and Domestic Tracked services.<br />The Email notification enhancement is also
     * available for International Tracked and International Tracked and Signed
     * services.<br />Returns an error if requested and the service does not allow it.
     *
     * @var string
     */
    public $TrackingNotifications = null;

    /**
     * Recorded Signed For<br />Available for all Domestic Services that are not
     * Special Delivery, Tracked or BFPO.<br />This is an enhancement for services that
     * don't have an in-built signature service like Special Delivery and Tracked.<br
     * />Returns an error if requested and the service does not allow it.
     *
     * @var bool
     */
    public $RecordedSignedFor = null;
}
