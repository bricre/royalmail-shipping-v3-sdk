<?php

namespace RoyalMail\SDK\V3Shipping\Model\ServiceAvailability;

use OpenAPI\Runtime\AbstractModel;

/**
 * The Destination<br />Where the parcel is going to.
 */
class Destination extends AbstractModel
{
    /**
     * Destination Address ID<br />If supplied all destination address fields will be
     * ignored and the stored address will be used.
     *
     * @var string
     */
    public $AddressId = null;

    /**
     * Town<br />Required if Address Id is not provided.
     *
     * @var string
     */
    public $Town = null;

    /**
     * Country Code<br />[ISO Alpha-2 Country
     * Code](https://www.nationsonline.org/oneworld/country_code_list.htm)  per ISO
     * 3166 Standard.  Required if Address Id is not provided.
     *
     * @var string
     */
    public $CountryCode = null;

    /**
     * Postcode / Zip<br />Mandatory for all domestic destinations and some
     * international destinations if the Address Id is not provided.
     *
     * @var string
     */
    public $Postcode = null;
}
