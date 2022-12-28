<?php

namespace RoyalMail\SDK\V3Shipping\Model\CreateShipment;

use OpenAPI\Runtime\AbstractModel;

/**
 * The destination address and contact details.<br />It is the shipper???s
 * responsibility to provide accurate and concise information to ensure the best
 * possible delivery experience for the consumer.
 */
class Destination extends AbstractModel
{
    /**
     * Destination Address ID<br />If supplied all destination address fields will be
     * ignored and the stored address will be used.<br />*If a Safeplace is present in
     * the stored address, the Safeplace enhancement will be used if the service allows
     * it, otherwise it will be ignored. ShipmentInformation.ServiceOptions.Safeplace
     * overrides the address Safeplace and forces Safeplace to be required enhancement
     * of the service.*.
     *
     * @var string
     */
    public $AddressId = null;

    /**
     * Company Name.
     *
     * @var string
     */
    public $CompanyName = null;

    /**
     * Contact Name<br />Required if Address Id is not provided.
     *
     * @var string
     */
    public $ContactName = null;

    /**
     * Address Line 1<br />Required if Address Id is not provided.
     *
     * @var string
     */
    public $AddressLine1 = null;

    /**
     * Address Line 2<br />*Please ensure the address data is presented in line with
     * the destination country formats.*.
     *
     * @var string
     */
    public $AddressLine2 = null;

    /**
     * Address Line 3<br />*Please ensure the address data is presented in line with
     * the destination country formats.*.
     *
     * @var string
     */
    public $AddressLine3 = null;

    /**
     * Town<br />Required if Address Id is not provided.
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
     * Code](https://www.nationsonline.org/oneworld/country_code_list.htm)  per ISO
     * 3166 Standard.  Required if Address Id is not provided.
     *
     * @var string
     */
    public $CountryCode = null;

    /**
     * Postcode / Zip<br />Mandatory for all domestic shipments and some international
     * shipments if the Address Id is not provided.
     *
     * @var string
     */
    public $Postcode = null;

    /**
     * Contact Phone Number<br />Required if SMS notifications are requested (Service
     * Enhancement Code 13 or 16) and Address Id is not provided.<br />Must be a valid
     * phone number.
     *
     * @var string
     */
    public $PhoneNumber = null;

    /**
     * Contact Email Address<br />Required if email notifications are requested
     * (Service Enhancement Code 14 or 16) and Address Id is not provided.<br />Must be
     * a valid email address.
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
