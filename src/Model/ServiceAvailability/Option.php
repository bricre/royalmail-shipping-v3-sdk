<?php

namespace RoyalMail\SDK\V3Shipping\Model\ServiceAvailability;

use OpenAPI\Runtime\AbstractModel;

/**
 * An available service option based on your request.
 */
class Option extends AbstractModel
{
    /**
     * Service Code<br />Customer Mapped Service Code or System Service Code for this
     * service.
     *
     * @var string
     */
    public $ServiceCode = null;

    /**
     * Service Name.
     *
     * @var string
     */
    public $ServiceName = null;

    /**
     * Estimated Transit Days.
     *
     * @var int
     */
    public $TransitDays = null;

    /**
     * Is Tracked<br />If true, the service is a tracked service.
     *
     * @var bool
     */
    public $IsTracked = null;

    /**
     * Signature Included<br />If true, a signature required on delivery is included
     * with the service.
     *
     * @var bool
     */
    public $SignatureIncluded = null;

    /**
     * Recorded Signed For Enhancement Available<br />If true, the recorded signed for
     * enhancement can be used with this service.
     *
     * @var bool
     */
    public $RecordedSignedForAvailable = null;

    /**
     * Safe Place Enhancement Available<br />If true, the safe place enhancement can be
     * used with this service.
     *
     * @var bool
     */
    public $SafeplaceAvailable = null;

    /**
     * Local Collect Enhancement Available<br />If true, the local collect enhancement
     * can be used with this service.
     *
     * @var bool
     */
    public $LocalCollectAvailable = null;

    /**
     * Saturday Guaranteed Enhancement Available<br />If true, the saturday guaranteed
     * enhancement can be used with this service.
     *
     * @var bool
     */
    public $SaturdayGuaranteedAvailable = null;

    /**
     * Consequential Loss Enhancement Available<br />If true, the consequential loss
     * enhancement can be used with this service.
     *
     * @var bool
     */
    public $ConsequentialLossAvailable = null;

    /**
     * Formats Available<br />All formats that are available for this service for the
     * given weight, including the maximum weight possible for each format.
     *
     * @var \RoyalMail\SDK\V3Shipping\Model\ServiceAvailability\Format[]
     */
    public $FormatsAvailable = null;
}
