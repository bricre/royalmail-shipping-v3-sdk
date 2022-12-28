<?php

namespace RoyalMail\SDK\V3Shipping\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * Response from a print label request, containing the label if the request was
 * successful.
 */
class PrintLabelResponse extends AbstractModel
{
    /**
     * Shipment Id<br />Tracking Number or Unique Id of the shipment involved.
     *
     * @var string
     */
    public $ShipmentId = null;

    /**
     * Label Image<br />Depends on Label Image Format<br />            <br />**PDF**<br
     * />Base 64 encoded PDF<br />            <br />**PNG**<br />Base 64 encoded PNG<br
     * />            <br />**ZPL 300 / 203 dpi**<br />Base 64 encoded PRN (text
     * file)<br />            <br />**Data stream**<br />Not Included.
     *
     * @var string
     */
    public $LabelImage = null;

    /**
     * Label Image Format.
     *
     * @var string
     */
    public $LabelImageFormat = null;

    /**
     * Shipment Tracking Number<br />Final Mile carrier tracking number.
     *
     * @var string
     */
    public $TrackingNumber = null;

    /**
     * Unique Shipment ID.
     *
     * @var string
     */
    public $UniqueId = null;

    /**
     * Tracking URL<br />Final Mile Tracking, if available.
     *
     * @var string
     */
    public $TrackingUrl = null;

    /**
     * Carrier Code<br />The allocated carrier.
     *
     * @var string
     */
    public $CarrierCode = null;

    /**
     * Primary 2D Barcode Image<br />Only populated for Data Stream response.<br
     * />Base64 Encoded PNG Image of the 2D data matrix barcode.
     *
     * @var string
     */
    public $Primary2DBarcodeImage = null;

    /**
     * Primary 2D Barcode Data - Base 64 Encoded<br />Only populated for Data Stream
     * response.<br />Data required to create your own 2D data matrix barcode. Please
     * decode before use.
     *
     * @var string
     */
    public $Primary2DBarcodeData = null;

    /**
     * Formatted Unique Id<br />Only populated for Data Stream response.<br />Label for
     * 2D data matrix barcode.
     *
     * @var string
     */
    public $FormattedUniqueId = null;

    /**
     * High Volume Barcode Data<br />Only populated for Data Stream response where the
     * service requires the barcode on the label.<br />Data required to create your own
     * High Volume barcode.
     *
     * @var string
     */
    public $HighVolumeBarcodeData = null;

    /**
     * High Volume Barcode Image<br />Only populated for Data Stream response where the
     * service requires the barcode on the label.<br />Base64 Encoded PNG Image of the
     * High Volume barcode.
     *
     * @var string
     */
    public $HighVolumeBarcodeImage = null;

    /**
     * High Volume Sort Code<br />Only populated for Data Stream response where the
     * service requires the sort code on the label.
     *
     * @var string
     */
    public $HighVolumeSortCode = null;

    /**
     * Primary 1D Barcode Data<br />Only populated for Data Stream response where the
     * service requires the barcode on the label.<br />Data required to create your own
     * 1D barcode.
     *
     * @var string
     */
    public $Primary1DBarcodeData = null;

    /**
     * Primary 1D Barcode Image<br />Only populated for Data Stream response where the
     * service requires the barcode on the label.<br />Base64 Encoded PNG Image of the
     * 1D barcode.
     *
     * @var string
     */
    public $Primary1DBarcodeImage = null;

    /**
     * Return Label Image Format.
     *
     * @var string
     */
    public $ReturnLabelImageFormat = null;

    /**
     * Return Label Image<br />Any return label that have been created as a result of
     * the request and label option settings.<br />Depends on
     * ReturnLabelImageFormat.<br />            <br />**PDF**<br />Base 64 encoded
     * PDF<br />            <br />**PNG**<br />Base 64 encoded PNG<br />            <br
     * />**ZPL 300 / 203 dpi**<br />Base 64 encoded PRN (text file).
     *
     * @var string
     */
    public $ReturnLabelImage = null;

    /**
     * @var \RoyalMail\SDK\V3Shipping\Model\Routing
     */
    public $Routing = null;

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
