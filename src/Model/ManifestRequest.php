<?php

namespace RoyalMail\SDK\V3Shipping\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * A request to manifest all shipments ready to manifest for a single posting
 * location.
 */
class ManifestRequest extends AbstractModel
{
    /**
     * Posting Location.<br />Optional if you only have 1 Posting Location.
     *
     * @var string
     */
    public $PostingLocation = null;
}
