<?php

namespace RoyalMail\SDK\V3Shipping\Model\ServiceAvailability;

use OpenAPI\Runtime\AbstractModel;

/**
 * Available Format for a service, with the maximum possible weight allowed.
 */
class Format extends AbstractModel
{
    /**
     * Service Format<br />An available service format for this service.<br />If blank,
     * then formats are not applicable for this service.<br />            <br />**L** -
     * Letter<br />**F** - Large Letter<br />**P** - Parcel<br />**S** - Printed
     * Papers<br />**Blank** - Not Applicable.
     *
     * @var string
     */
    public $ServiceFormat = null;

    /**
     * Format Description<br />A description of the Service Format<br />            <br
     * />Letter<br />Large Letter<br />Parcel<br />International Printed Papaers<br
     * />Not Applicable.
     *
     * @var string
     */
    public $FormatDescription = null;

    /**
     * Maximum Weight<br />The maximum weight allowed for this format (or service if
     * formats not applicable) in specified Unit of Measure.
     *
     * @var float
     */
    public $MaxWeight = null;
}
