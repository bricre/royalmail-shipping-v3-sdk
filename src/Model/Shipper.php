<?php

namespace RoyalMail\SDK\V3Shipping\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The shipper details for a shipment request.<br />Confirms the details of the
 * shipper address and contact details.<br />If not supplied, the the posting
 * location address will be used.
 */
class Shipper extends AbstractModel
{
    /**
     * Shipper Address Id<br />If supplied all shipper address fields will be ignored
     * and the address from the Address Book will be used.
     *
     * @var string
     */
    public $AddressId = null;

    /**
     * Shipper Reference<br />Your reference for this shipment.<br />This field is used
     * for Returns processing and is usually the shippers order number provided to the
     * consumer.
     *
     * @var string
     */
    public $ShipperReference = null;

    /**
     * Shipper Reference 2<br />Your second reference for this shipment. This field is
     * used for tracking shipment usually the EBAY VTN number provided to the consumer.
     *       <br />Optional.
     *
     * @var string
     */
    public $ShipperReference2 = null;

    /**
     * Shipper Department Code<br />For Royal Mail shipments, this code must be a valid
     * 10-digit OBA department code.
     *
     * @var string
     */
    public $ShipperDepartment = null;

    /**
     * Company Name.
     *
     * @var string
     */
    public $CompanyName = null;

    /**
     * Contact Name.
     *
     * @var string
     */
    public $ContactName = null;

    /**
     * Address Line 1<br />Populate with Shipper's address if provided.
     *
     * @var string
     */
    public $AddressLine1 = null;

    /**
     * Address Line 2.
     *
     * @var string
     */
    public $AddressLine2 = null;

    /**
     * Address Line 3.
     *
     * @var string
     */
    public $AddressLine3 = null;

    /**
     * Town<br />Required if address is populated.
     *
     * @var string
     */
    public $Town = null;

    /**
     * County / State / Province<br />Whether this is required or not is dependent on
     * the country settings.
     *
     * @var string
     */
    public $County = null;

    /**
     * Country Code<br />[ISO Alpha-2 Country
     * Code](https://www.nationsonline.org/oneworld/country_code_list.htm) per ISO 3166
     * Standard.<br />Required if address is populated.<br />Must be GB, IM, GG or JE.
     *
     * @var string
     */
    public $CountryCode = null;

    /**
     * Postcode / Zip<br />Mandatory for all domestic addresses and some international
     * shipments if address is populated.
     *
     * @var string
     */
    public $Postcode = null;

    /**
     * Contact Phone Number<br />Must be a valid phone number.
     *
     * @var string
     */
    public $PhoneNumber = null;

    /**
     * Contact Email Address<br />Must be a valid email address.
     *
     * @var string
     */
    public $EmailAddress = null;

    /**
     * VAT Number.
     *
     * @var string
     */
    public $VatNumber = null;
}
