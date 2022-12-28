<?php

namespace RoyalMail\SDK\V3Shipping\Model\ServiceAvailability;

use OpenAPI\Runtime\AbstractModel;

/**
 * Details of a package in a shipment request.<br />Enter the dimensions and weight
 * of the package in the shipment. Use the PackageOccurance to indicate the items
 * within the package.
 */
class ShipmentPackage extends AbstractModel
{
    /**
     * Package Occurrence<br />Unique package number within this shipment.<br />Cannot
     * exceed total number of packages.
     *
     * @var int
     */
    public $PackageOccurrence = null;

    /**
     * Packaging ID<br />If supplied, packaging details will be populated from the
     * stored information.
     *
     * @var string
     */
    public $PackagingId = null;

    /**
     * Total Package Weight.<br />            <br />This field will be used as the
     * Shipment Weight for single-package services such as RMG.<br />The package weight
     * must be greater than or equal to the sum of all item weights and packaging, if
     * this information is provided.<br />Min weight: 1 gram.
     *
     * @var float
     */
    public $Weight = null;

    /**
     * Package Length<br />Dimensions are in Centimetres.<br />*Dimensions are
     * optional, however supplying accurate information helps ensure a smooth delivery
     * experience.*.
     *
     * @var float
     */
    public $Length = null;

    /**
     * Package Width<br />Dimensions are in Centimetres.<br />*Dimensions are optional,
     * however supplying accurate information helps ensure a smooth delivery
     * experience.*.
     *
     * @var float
     */
    public $Width = null;

    /**
     * Package Height<br />Dimensions are in Centimetres.<br />*Dimensions are
     * optional, however supplying accurate information helps ensure a smooth delivery
     * experience.*.
     *
     * @var float
     */
    public $Height = null;
}
