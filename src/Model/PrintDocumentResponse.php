<?php

namespace RoyalMail\SDK\V3Shipping\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * Response from a print documents request, containing the documents if the request
 * was successful.
 */
class PrintDocumentResponse extends AbstractModel
{
    /**
     * Shipment Id<br />Tracking Number or Unique Id of the shipment involved.
     *
     * @var string
     */
    public $ShipmentId = null;

    /**
     * Document Type<br />            <br />**CN23** - Customs Documents PDF 100mm x
     * 150mm<br />**CI** - Commercial Invoice PDF A4 Portrait<br />**P** - Proforma PDF
     * A4 Portrait.
     *
     * @var string
     */
    public $DocumentType = null;

    /**
     * Document Image<br />Base 64 encoded PDF.
     *
     * @var string
     */
    public $DocumentImage = null;

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
