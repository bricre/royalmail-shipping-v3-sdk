<?php

namespace RoyalMail\SDK\V3Shipping\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * A request to print a label.
 */
class PrintLabelRequest extends AbstractModel
{
    /**
     * Requested Label Format<br />*DATASTREAM is only available if it has been
     * activated on your account.*.
     *
     * @var string
     */
    public $LabelFormat = 'PDF';

    /**
     * Silent Print Profile<br />If present, resulting labels will be printed using
     * this profile.
     *
     * @var string
     */
    public $SilentPrintProfile = null;
}
