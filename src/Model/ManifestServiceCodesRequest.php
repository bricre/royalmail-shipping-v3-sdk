<?php

namespace RoyalMail\SDK\V3Shipping\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * A request to manifest shipments created with the given service codes that are
 * ready to manifest for a single posting location.
 */
class ManifestServiceCodesRequest extends AbstractModel
{
    /**
     * Service Codes<br />Must be valid system service codes OR customer mapped service
     * codes.
     *
     * @var string[]|
     */
    public $ServiceCodes = null;

    /**
     * Posting Location.<br />Optional if you only have 1 Posting Location.
     *
     * @var string
     */
    public $PostingLocation = null;
}
