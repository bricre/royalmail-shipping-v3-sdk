<?php

namespace RoyalMail\SDK\V3Shipping\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * Packaging details that are stored, to be used in shipment requests.
 */
class Packaging extends AbstractModel
{
    /**
     * Packaging Unique ID<br />Your unique identifier for these packaging details.<br
     * />If not provided, a GUID will be generated.
     *
     * @var string
     */
    public $PackagingId = null;

    /**
     * Name<br />The descriptive name of these packaging details.
     *
     * @var string
     */
    public $Name = null;

    /**
     * Packaging Weight<br />The weight of this packaging.<br />Min weight: 1 gram.
     *
     * @var float
     */
    public $Weight = null;

    /**
     * Weight Unit of Measure.
     *
     * @var string
     */
    public $WeightUnitOfMeasure = 'KG';

    /**
     * Packaging Length<br />The length of this packaging in CM.
     *
     * @var float
     */
    public $Length = null;

    /**
     * Packaging Width<br />The width of this packaging in CM.
     *
     * @var float
     */
    public $Width = null;

    /**
     * Packaging Height<br />The height of this packaging in CM.
     *
     * @var float
     */
    public $Height = null;
}
