<?php

namespace RoyalMail\SDK\V3Shipping\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * An Item that is stored for use in shipment requests.
 */
class Item extends AbstractModel
{
    /**
     * Unique ID<br />Your unique identifier for this item.<br />If not provided, a
     * GUID will be generated.
     *
     * @var string
     */
    public $ItemId = null;

    /**
     * Item Description.
     *
     * @var string
     */
    public $Description = null;

    /**
     * Item Value.
     *
     * @var float
     */
    public $Value = null;

    /**
     * Currency<br />3 digit ISO Currency Code.
     *
     * @var string
     */
    public $Currency = null;

    /**
     * Item Weight<br />The weight of this item.<br />Min weight: 1 gram.
     *
     * @var float
     */
    public $Weight = null;

    /**
     * Weight Unit of Measure<br />If using Grams, minimum weight is 1 and partial
     * numbers will be ignored.
     *
     * @var string
     */
    public $WeightUnitOfMeasure = 'KG';

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
