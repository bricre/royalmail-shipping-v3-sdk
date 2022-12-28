<?php

namespace RoyalMail\SDK\V3Shipping\Api;

use OpenAPI\Runtime\AbstractAPI;

class Token extends AbstractAPI
{
    /**
     * Provides security token.
     *
     * @return mixed
     */
    public function Authenticate_Post(): mixed
    {
        return $this->client->request('Authenticate_Post', 'POST', 'shipping/v3/token',
            [
            ]
        );
    }
}
