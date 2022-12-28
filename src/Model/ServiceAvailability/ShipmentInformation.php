<?php

namespace RoyalMail\SDK\V3Shipping\Model\ServiceAvailability;

use OpenAPI\Runtime\AbstractModel;

/**
 * Shipment Information<br />Overall package details and requested service
 * requirements.
 */
class ShipmentInformation extends AbstractModel
{
    /**
     * Service Code<br />Must be a valid system service code OR a customer mapped
     * service code.<br />If service code is not supplied a list of all available
     * service options will be returned, otherwise only information about the service
     * requested will be returned.
     *
     * @var string
     */
    public $ServiceCode = null;

    /**
     * Service Options<br />Specify any service requirements such as format required or
     * enhancements required.
     *
     * @var \RoyalMail\SDK\V3Shipping\Model\ServiceAvailability\ServiceOptions
     */
    public $ServiceOptions = null;

    /**
     * Number of Packages<br />The total number of packages.
     *
     * @var int
     */
    public $TotalPackages = null;

    /**
     * Total Weight<br />The total weight of the shipment including packaging.
     * Validated againt package weight.<br />Min weight: 1 gram.
     *
     * @var float
     */
    public $TotalWeight = null;

    /**
     * Weight Unit of Measure.
     *
     * @var string
     */
    public $WeightUnitOfMeasure = 'KG';

    /**
     * Shipment/Product type being shipped<br />            <br />**DOX** - Documents
     * Only<br />**NDX** - All other shipment product types.
     *
     * @var string
     */
    public $Product = 'NDX';

    /**
     * Total Shipment Value<br />Required for Non-Document International and BFPO
     * Shipments.<br />Ignored for Documents Only shipments.
     *
     * @var float
     */
    public $Value = null;

    /**
     * Currency<br />This currency will be used for all values across the shipment
     * request.<br />3 digit ISO Currency Code.<br />Required for Non-Document
     * International and BFPO Shipments, or when value is provided.<br />Ignored for
     * Documents Only shipments.
     *
     * @var string
     */
    public $Currency = null;

    /**
     * Shipment Packages<br />The packages in the shipment.<br />Required if
     * TotalPackages is more than 1.
     *
     * @var \RoyalMail\SDK\V3Shipping\Model\ServiceAvailability\ShipmentPackage[]
     */
    public $Packages = null;
}
