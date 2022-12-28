<?php

namespace RoyalMail\SDK\V3Shipping\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * A request to manifest shipments created with the given carrier codes that are
 * ready to manifest for a single posting location.
 */
class ManifestCarrierCodesRequest extends AbstractModel
{
    /**
     * Carrier Codes<br />Must be valid system carrier codes.
     *
     * @var string[]|
     */
    public $CarrierCodes = null;

    /**
     * Posting Location.<br />Optional if you only have 1 Posting Location.
     *
     * @var string
     */
    public $PostingLocation = null;
}
