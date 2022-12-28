<?php

namespace RoyalMail\SDK\V3Shipping\Model\ServiceAvailability;

use OpenAPI\Runtime\AbstractModel;

/**
 * Service Options<br />Specify any service requirements such as format required or
 * enhancements required.
 */
class ServiceOptions extends AbstractModel
{
    /**
     * Service Format<br />If provided, only return services that support the given
     * service format.<br />            <br />**L** - Letter<br />**F** - Large
     * Letter<br />**P** - Parcel<br />**S** - Printed Papers - International Services
     * Only.
     *
     * @var string
     */
    public $ServiceFormat = null;

    /**
     * Tracked Services<br />If true, only return Tracked Services.
     *
     * @var bool
     */
    public $Tracked = null;

    /**
     * Signature Required<br />If true, only return services that are either with
     * signature or support the Recorded Signed For enhancement.
     *
     * @var bool
     */
    public $SignatureRequired = null;

    /**
     * Safe Place Enhancement<br />If true, only return services that support the Safe
     * Place enhancement.
     *
     * @var bool
     */
    public $Safeplace = null;

    /**
     * Local Collect Enhancement<br />If true, only return services that support the
     * Local Collect enhancement.
     *
     * @var bool
     */
    public $LocalCollect = null;

    /**
     * Saturday Guaranteed Enhancement<br />If true, only return services that support
     * the Saturday Guaranteed enhancement.
     *
     * @var bool
     */
    public $SaturdayGuaranteed = null;

    /**
     * Consequential Loss Enhancement<br />If true, only return services that support
     * the Consequential Loss enhancement.
     *
     * @var bool
     */
    public $ConsequentialLoss = null;
}
