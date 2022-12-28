<?php

namespace RoyalMail\SDK\V3Shipping\Api;

use OpenAPI\Runtime\AbstractAPI;
use RoyalMail\SDK\V3Shipping\Model\Packaging as PackagingModel;
use RoyalMail\SDK\V3Shipping\Model\PackagingResponse;

class Packaging extends AbstractAPI
{
    /**
     * Get all of your stored packaging details.
     *
     * @return array
     */
    public function _GetAll(): array
    {
        return $this->client->request('Packaging_GetAll', 'GET', 'shipping/v3/packaging',
            [
            ]
        );
    }

    /**
     * Add new packaging to your stored packaging details that you can then use in your shipment requests.
     *
     * @param PackagingModel $Model create Packaging Add new packaging to your stored packaging details that you can then use in your shipment requests
     *
     * @return PackagingResponse
     */
    public function _Create(PackagingModel $Model): PackagingResponse
    {
        return $this->client->request('Packaging_Create', 'POST', 'shipping/v3/packaging',
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }

    /**
     * Get the packaging details specified by your unique Packaging ID.
     *
     * @param $packagingId Your Unique Packaging ID
     *
     * @return PackagingModel
     */
    public function _Get($packagingId): PackagingModel
    {
        return $this->client->request('Packaging_Get', 'GET', "shipping/v3/packaging/{$packagingId}",
            [
            ]
        );
    }

    /**
     * Update packaging details that is already stored with new details. All details will be replaced with new details.
     *
     * @param $packagingId Your unique Packaging ID of the packaging details to update
     * @param PackagingModel $Model Update packaging Update packaging details that is already stored with new details. All details will be replaced with new details.
     *
     * @return PackagingResponse
     */
    public function _Update($packagingId, PackagingModel $Model): PackagingResponse
    {
        return $this->client->request('Packaging_Update', 'PUT', "shipping/v3/packaging/{$packagingId}",
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }

    /**
     * Deletes the specified packaging.
     *
     * @param $packagingId Your unique Packaging ID of the packaging details to delete
     *
     * @return PackagingResponse
     */
    public function _Delete($packagingId): PackagingResponse
    {
        return $this->client->request('Packaging_Delete', 'DELETE', "shipping/v3/packaging/{$packagingId}",
            [
            ]
        );
    }
}
