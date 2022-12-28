<?php

namespace RoyalMail\SDK\V3Shipping\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * Routing information.
 */
class Routing extends AbstractModel
{
    /**
     * Inward Code<br />Only populated for Data Stream response where the service
     * requires the Gazetteer codes on the label.
     *
     * @var string
     */
    public $InwardCode = null;

    /**
     * Outward Code<br />Only populated for Data Stream response where the service
     * requires the Gazetteer codes on the label.
     *
     * @var string
     */
    public $OutwardCode = null;

    /**
     * Walk<br />Only populated for Data Stream response where the service requires the
     * Gazetteer codes on the label.
     *
     * @var string
     */
    public $Walk = null;

    /**
     * Loop<br />Only populated for Data Stream response where the service requires the
     * Gazetteer codes on the label.
     *
     * @var string
     */
    public $Loop = null;
}
