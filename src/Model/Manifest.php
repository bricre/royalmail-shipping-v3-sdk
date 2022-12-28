<?php

namespace RoyalMail\SDK\V3Shipping\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * Details of a Manifest that is returned when manifests are successfully created.
 */
class Manifest extends AbstractModel
{
    /**
     * Manifest Number.
     *
     * @var string
     */
    public $ManifestNumber = null;

    /**
     * Manifest Image<br />A base 64 encoded string of the manifest PDF.
     *
     * @var string
     */
    public $ManifestImage = null;

    /**
     * Carrier Code<br />The carrier that this manifest is for.
     *
     * @var string
     */
    public $CarrierCode = null;

    /**
     * Service Code<br />The service included in this Manifest. If more than one, Mixed
     * will be returned.
     *
     * @var string
     */
    public $ServiceCode = null;

    /**
     * Total Weight<br />Sum of the weight of all the packages included on the Manifest
     * in KGs.
     *
     * @var float
     */
    public $TotalWeight = null;

    /**
     * Total Packages<br />The total number of packages included on the Manifest.
     *
     * @var int
     */
    public $TotalPackages = null;
}
