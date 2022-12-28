<?php

namespace RoyalMail\SDK\V3Shipping\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * Response from a create shipment request.
 */
class ShipmentCreateResponse extends AbstractModel
{
    /**
     * Consignment Number<br />Only populated for services that support Multi-Packages.
     *
     * @var string
     */
    public $ConsignmentNumber = null;

    /**
     * Consignment Tracking URL<br />Only populated for services that support
     * Multi-Packages.
     *
     * @var string
     */
    public $ConsignmentTrackingUrl = null;

    /**
     * Packages<br />Details each package tracking information and Unique Id.
     *
     * @var \RoyalMail\SDK\V3Shipping\Model\PackageResponse[]
     */
    public $Packages = null;

    /**
     * Routing information.
     *
     * @var \RoyalMail\SDK\V3Shipping\Model\Routing
     */
    public $Routing = null;

    /**
     * Label Image Format.
     *
     * @var string
     */
    public $LabelImageFormat = null;

    /**
     * Label Images<br />Any labels that have been created as a result of the
     * request.<br />Depends on Label Image Format.<br />            <br />**PDF**<br
     * />Base 64 encoded PDF<br />            <br />**PNG**<br />Base 64 encoded PNG<br
     * />            <br />**ZPL 300 / 203 dpi**<br />Base 64 encoded PRN (text
     * file)<br />            <br />**Data stream**<br />Not Included - see Packages
     * for Data Stream responses.
     *
     * @var string
     */
    public $LabelImages = null;

    /**
     * Customs Documents<br />Any customs documents that have been created as a result
     * of the request.<br />Depends on Label Image Format.<br />            <br
     * />**PDF**<br />Base 64 encoded PDF<br />            <br />**PNG**<br />Base 64
     * encoded PNG<br />            <br />**ZPL 300 / 203 dpi**<br />Base 64 encoded
     * PRN (text file)<br />            <br />**Data stream**<br />Not Included - see
     * Packages for Data Stream responses.
     *
     * @var string
     */
    public $CustomsDocuments = null;

    /**
     * Return Label Image Format.
     *
     * @var string
     */
    public $ReturnLabelImageFormat = null;

    /**
     * Return Label Images<br />Any return labels that have been created as a result of
     * the request and label option settings.<br />Depends on
     * ReturnLabelImageFormat.<br />            <br />**PDF**<br />Base 64 encoded
     * PDF<br />            <br />**PNG**<br />Base 64 encoded PNG<br />            <br
     * />**ZPL 300 / 203 dpi**<br />Base 64 encoded PRN (text file).
     *
     * @var string
     */
    public $ReturnLabelImages = null;

    /**
     * HTTP Status Code.
     *
     * @var int
     */
    public $HttpStatusCode = null;

    /**
     * HTTP Status Description.
     *
     * @var string
     */
    public $HttpStatusDescription = null;

    /**
     * Message<br />Successful response may include a success message.<br />Failure
     * responses will have general reason as to why. Further details may be contained
     * in the list of errors.
     *
     * @var string
     */
    public $Message = null;

    /**
     * Errors<br />Details about why a request failed.
     *
     * @var \RoyalMail\SDK\V3Shipping\Model\ErrorDetail[]
     */
    public $Errors = null;
}
