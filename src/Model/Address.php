<?php

namespace RoyalMail\SDK\V3Shipping\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * An address that is part of the address book.<br />A stored address can be used
 * in shipment requests.
 */
class Address extends AbstractModel
{
    /**
     * Address ID<br />Your unique identifier for this address.<br />If not provided, a
     * GUID will be generated.
     *
     * @var string
     */
    public $AddressId = null;

    /**
     * Is Return Address<br />If true, then this address is also available as a return
     * address.
     *
     * @var bool
     */
    public $IsReturnAddress = null;

    /**
     * Company Name<br />*Ignored if is a return address*.
     *
     * @var string
     */
    public $CompanyName = null;

    /**
     * Contact Name / Return Name.
     *
     * @var string
     */
    public $ContactName = null;

    /**
     * Address Line 1.
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
     * Town.
     *
     * @var string
     */
    public $Town = null;

    /**
     * County / State / Province<br />Conditional dependent on country.<br />USA,
     * Australia and Canada all require a valid state code or name.
     *
     * @var string
     */
    public $County = null;

    /**
     * Country Code<br />[ISO Alpha-2 Country
     * Code](https://www.nationsonline.org/oneworld/country_code_list.htm) per ISO 3166
     * Standard<br />*Required to be GB if is a return address*.
     *
     * @var string
     */
    public $CountryCode = null;

    /**
     * Postcode / Zip<br />Required for domestic addresses and some international
     * addresses.
     *
     * @var string
     */
    public $Postcode = null;

    /**
     * Contact Phone Number<br />Required for destination addresses where SMS
     * notifications are requested.<br />(Service Enhancement Code 13 or 16)<br
     * />*Ignored if is a return address*.
     *
     * @var string
     */
    public $PhoneNumber = null;

    /**
     * Contact Email Address<br />Required for destination addresses where email
     * notifications are requested.<br />(Service Enhancement Code 14 or 16)<br
     * />*Ignored if is a Return Address*.
     *
     * @var string
     */
    public $EmailAddress = null;

    /**
     * VAT Number<br />*Ignored if is a return address*.
     *
     * @var string
     */
    public $VatNumber = null;

    /**
     * Safeplace<br />Free text to describe a safe place to leave the parcel if the
     * service allows it.<br />*Ignored if is a return address*.
     *
     * @var string
     */
    public $Safeplace = null;
}
