<?php

namespace RoyalMail\SDK\V3Shipping\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * Details of an item in a shipment request, including what package it is in if
 * possible.
 */
class ShipmentItem extends AbstractModel
{
    /**
     * Item ID<br />If supplied all item fields except Item Quantity will be populated
     * from the stored item record.
     *
     * @var string
     */
    public $ItemId = null;

    /**
     * Item Quantity<br />The quantity of items of this type.
     *
     * @var int
     */
    public $Quantity = null;

    /**
     * Item Description<br />Required if an Item Id is not supplied.
     *
     * @var string
     */
    public $Description = null;

    /**
     * Item Value<br />Individual item value (use same currency as shipment
     * currency).<br />Required if an Item Id is not supplied.
     *
     * @var float
     */
    public $Value = null;

    /**
     * Item Weight<br />Individual item weight.
     *
     * @var float
     */
    public $Weight = null;

    /**
     * Package Occurrence<br />Optional Package Occurrence used to indicate which
     * package the item has been packed into.
     *
     * @var int
     */
    public $PackageOccurrence = null;

    /**
     * HS Code<br />The [standardised commodity code](https://www.gov.uk/trade-tariff).
     * It must be 6-12 digits only.<br />Used by Customs to calculate potential duties
     * / taxes.
     *
     * @var string
     */
    public $HsCode = null;

    /**
     * SKU Code.<br />Used by Customs to calculate potential duties / taxes.
     *
     * @var string
     */
    public $SkuCode = null;

    /**
     * Country of Origin<br />[ISO Alpha-2 Country
     * Code](https://www.nationsonline.org/oneworld/country_code_list.htm) of item
     * country of origin, per ISO 3166 Standard.
     *
     * @var string
     */
    public $CountryOfOrigin = null;

    /**
     * Image URL<br />Used to save a link to an image of the item with the shipment
     * details, so that this can be used in the Returns<br />system for consumers to
     * see an image of the item when selecting items for return.<br />URL must be a
     * publicly accessible image.
     *
     * @var string
     */
    public $ImageUrl = null;
}
