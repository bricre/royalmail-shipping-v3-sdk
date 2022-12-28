<?php

namespace RoyalMail\SDK\V3Shipping\Model\CreateShipment;

use OpenAPI\Runtime\AbstractModel;

/**
 * Shipment Information. Overall package details, item details and requested
 * service information in a shipment request.<br /> It is important to ensure
 * accurate information is supplied to ensure correct handling by different customs
 * around the world.
 */
class ShipmentInformation extends AbstractModel
{
    /**
     * Shipment Date<br />Date of despatch - YYYY-MM-DD.<br />Cannot be in the past.
     * Max 28 days in the future.
     *
     * @var string
     */
    public $ShipmentDate = null;

    /**
     * Service Code<br />Must be a valid system service code OR a customer mapped
     * service code.
     *
     * @var string
     */
    public $ServiceCode = null;

    /**
     * Service Options<br />Only required if you have more than 1 Royal Mail Posting
     * Location.<br />Allows you to add enhancements, specify the posting location,
     * change the service level and specify a service format.
     *
     * @var \RoyalMail\SDK\V3Shipping\Model\CreateShipment\ServiceOptions
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
     * Validated againt package weight.<br />Min weight: 1 gram.     <br
     * />*Optional/Overwritten for Average Weight Services - Average Weight Customers
     * only.*.
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
     * Description of Goods<br />General description of the goods being sent.<br
     * />Required for Non-Document International and BFPO Shipments.<br />Ignored for
     * Documents Only shipments.
     *
     * @var string
     */
    public $DescriptionOfGoods = null;

    /**
     * Reason For Export<br />Required for International Shipments and BFPO (British
     * Forces Post Office).
     *
     * @var string
     */
    public $ReasonForExport = null;

    /**
     * Total Shipment Value<br />Required for Non-Document International and BFPO
     * Shipments.<br />Ignored for Documents Only shipments.
     *
     * @var float
     */
    public $Value = null;

    /**
     * Currency<br />This currency will be used for all values across the shipment
     * request, including customs charges.<br />3 digit ISO Currency Code.<br
     * />Required for Non-Document International and BFPO Shipments, or when values are
     * provided.<br />Ignored for Documents Only shipments.
     *
     * @var string
     */
    public $Currency = null;

    /**
     * International Commercial Terms<br />Developed by International Chamber of
     * Commerce and widely used in international and domestic contracts for the sale of
     * goods.<br /><br />    **DDP** - Delivered Duty Paid.<br />            <br />
     * **DAT** - Delivered At Terminal.<br />            <br />    **DAP** - Delivered
     * At Place.<br />            <br />    **DDU** - Delivered Duty Unpaid.
     *
     * @var string
     */
    public $Incoterms = 'DDU';

    /**
     * Requested Label Format<br />*DATASTREAM is only available if it has been
     * activated on your account.*<br />Ignored if ShipmentAction set to Create or
     * Allocate.
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

    /**
     * Shipment Action<br />            <br />**Process** - Shipment created and
     * processed, ready for manifesting. Label and tracking number returned.<br />
     *       <br />**Create** - Shipment created as unprocessed, ready for scanning.
     * Scanning will create label and tracking number and move shipment to
     * processed.<br />            <br />**Allocate** - Shipment created as unprocessed
     * with tracking number allocated and returned and label created but not returned.
     * Scanning will return label and move shipment to processed.
     *
     * @var string
     */
    public $ShipmentAction = 'Process';

    /**
     * Shipment Packages<br />The packages in the shipment.<br />Required if
     * TotalPackages is more than 1.
     *
     * @var \RoyalMail\SDK\V3Shipping\Model\CreateShipment\ShipmentPackage[]
     */
    public $Packages = null;

    /**
     * Shipment Items<br />The items in the shipment.<br />Required for Non-Document
     * International Shipments and BFPO (British Forces Post Office).<br />Ignored for
     * Documents Only shipments.
     *
     * @var \RoyalMail\SDK\V3Shipping\Model\ShipmentItem[]
     */
    public $Items = null;
}
