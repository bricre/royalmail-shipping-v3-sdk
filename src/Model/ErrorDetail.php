<?php

namespace RoyalMail\SDK\V3Shipping\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * Details about an error.
 */
class ErrorDetail extends AbstractModel
{
    /**
     * Message<br />The error message, or issue.
     *
     * @var string
     */
    public $Message = null;

    /**
     * Cause<br />The cause of the error.
     *
     * @var string
     */
    public $Cause = null;

    /**
     * Error Code<br />The error code for this error.<br /><br />**E1431** - System
     * error<br />**E1432** - Required field<br />**E1433** - Invalid field<br
     * />**E1434** - Invalid action<br />**E1435** - Item not found<br />.
     *
     * @var string
     */
    public $ErrorCode = null;

    /**
     * Error Log Id<br />The associated Error Log Id if exists.
     *
     * @var string
     */
    public $ErrorId = null;
}
