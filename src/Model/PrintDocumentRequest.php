<?php

namespace RoyalMail\SDK\V3Shipping\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * A request to print a document for a shipment.
 */
class PrintDocumentRequest extends AbstractModel
{
    /**
     * Document Type<br />What document you would like printed<br />            <br
     * />**CN23** - Customs Documents PDF 100mm x 150mm<br />**CI** - Commercial
     * Invoice PDF A4 Portrait<br />**P** - Proforma PDF A4 Portrait.
     *
     * @var string
     */
    public $DocumentType = null;

    /**
     * Silent Print Profile<br />If present, resulting documents will be printed using
     * this profile.
     *
     * @var string
     */
    public $SilentPrintProfile = null;
}
