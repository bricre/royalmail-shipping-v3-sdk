<?php

namespace RoyalMail\SDK\V3Shipping\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * Individual Package Response within a Shipment Response.<br />Every successful
 * response will have one of these per package request.
 */
class PackageResponse extends AbstractModel
{
    /**
     * Package Occurence<br />Unique package number within this shipment.
     *
     * @var int
     */
    public $PackageOccurance = null;

    /**
     * Unique Shipment ID<br />All shipments are assigned a unique Shipment ID.
     *
     * @var string
     */
    public $UniqueId = null;

    /**
     * Shipment Tracking Number<br />Final Mile carrier tracking number.<br />Only
     * populated for services that support tracking numbers.
     *
     * @var string
     */
    public $TrackingNumber = null;

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
}
