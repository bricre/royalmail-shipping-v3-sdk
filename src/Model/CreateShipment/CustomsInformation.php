<?php

namespace RoyalMail\SDK\V3Shipping\Model\CreateShipment;

use OpenAPI\Runtime\AbstractModel;

/**
 * Extra customs information not already part of Shipment Information.
 */
class CustomsInformation extends AbstractModel
{
    /**
     * A pre-registration number is only relevant if the INCOTERMS (International
     * Commercial Terms) for the shipment are DDP (Delivery duty paid).<br /><br />If
     * not provided, and the INCOTERMS are set to DDP, any pre-registration numbers set
     * up via your Customs Settings will be used.
     *
     * @var string
     */
    public $PreRegistrationNumber = null;

    /**
     * The type of pre-registration number provided above. <br />Required if a
     * pre-registration number has been provided.<br />Ignored if there is no
     * pre-registration number.
     *
     * @var string
     */
    public $PreRegistrationType = null;

    /**
     * Shipping Charges for International Shipments.<br />The postage amount paid by
     * your customer. The amount can be 0.00 if you have offered your customer free
     * delivery. <br />Used for the calculation of customs fees.<br /><br />*The amount
     * should be in the currency specified in the ShipmentInformation/Currency field.*.
     *
     * @var float
     */
    public $ShippingCharges = null;

    /**
     * Insurance and Other Costs for International Shipments.<br />If you have charged
     * your customer an additional surcharge such as insurance, you must declare the
     * amount here. <br />This field can be left blank, or be 0.00 if no other charges
     * have been levied.<br /><br />*Any value should be in the currency specified in
     * the ShipmentInformation/Currency field.*.
     *
     * @var float
     */
    public $OtherCharges = null;

    /**
     * Quoted Landed Cost<br />This will be the Value of Tax and Duties due to be paid
     * for via the purchaser to the merchant relevant to international sales of
     * goods.<br /><br />*Any value should be in the currency specified in the
     * ShipmentInformation/Currency field.*.
     *
     * @var float
     */
    public $QuotedLandedCost = null;

    /**
     * Commercial Invoice Number for International Shipments.<br />When sending an item
     * to an overseas address and a commercial invoice is available the Invoice Number
     * and Date should be provided where possible. This supports customs processing in
     * certain circumstances.
     *
     * @var string
     */
    public $InvoiceNumber = null;

    /**
     * Commercial Invoice Date - YYYY-MM-DD.<br />Required when a commercial invoice
     * number is provided.<br />Ignored if no Invoice Number provided.
     *
     * @var string
     */
    public $InvoiceDate = null;

    /**
     * Export Licence Required.<br />Customers exporting items requiring an export
     * licence must flag the item as requiring an export licence here. This requirement
     * is restricted to exporters of specific type of goods used predominantly for
     * military purposes, as such will probably not apply to you. You can find out more
     * about the type of items requiring an export licence on the UK Government
     * website.<br /><br />If an export licence is required, it should be affixed to
     * the outside of your parcel.
     *
     * @var bool
     */
    public $ExportLicence = null;

    /**
     * Addressee Identification Reference Number (previously "recipients purchasing
     * ID").<br />Recipient Purchasing IDs for International Shipments. <br />A small
     * number of countries require their citizens to obtain a registration number
     * before importing goods from overseas. When exporting items to countries with
     * such a scheme in place there is a requirement to provide the recipients
     * registration details to customs authorities.
     *
     * @var string
     */
    public $AddresseeIdentificationReferenceNumber = null;
}
