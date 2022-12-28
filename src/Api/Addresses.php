<?php

namespace RoyalMail\SDK\V3Shipping\Api;

use OpenAPI\Runtime\AbstractAPI;
use RoyalMail\SDK\V3Shipping\Model\Address;
use RoyalMail\SDK\V3Shipping\Model\AddressResponse;

class Addresses extends AbstractAPI
{
    /**
     * Get all of your stored addresses.
     *
     * @return array
     */
    public function _GetAll(): array
    {
        return $this->client->request('Addresses_GetAll', 'GET', 'shipping/v3/addresses',
            [
            ]
        );
    }

    /**
     * Add a new address to your address book that you can then use in your shipment requests.
     *
     * @param Address $Model create Address Add a new address to your address book that you can then use in your shipment requests
     *
     * @return AddressResponse
     */
    public function _Create(Address $Model): AddressResponse
    {
        return $this->client->request('Addresses_Create', 'POST', 'shipping/v3/addresses',
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }

    /**
     * Get the address specified by your unique Address ID.
     *
     * @param $addressId Your unique Address ID
     *
     * @return Address
     */
    public function _Get($addressId): Address
    {
        return $this->client->request('Addresses_Get', 'GET', "shipping/v3/addresses/{$addressId}",
            [
            ]
        );
    }

    /**
     * Update an address that is already in your address book with new details. The whole address will be replaced with<br />new details.
     *
     * @param $addressId Your unique Address ID of the address to update
     * @param Address $Model Update address Update an address that is already in your address book with new details. The whole address will be replaced with<br />new details.
     *
     * @return AddressResponse
     */
    public function _Update($addressId, Address $Model): AddressResponse
    {
        return $this->client->request('Addresses_Update', 'PUT', "shipping/v3/addresses/{$addressId}",
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }

    /**
     * Deletes the specified address.
     *
     * @param $addressId Your unique Address ID of the address to delete
     *
     * @return AddressResponse
     */
    public function _Delete($addressId): AddressResponse
    {
        return $this->client->request('Addresses_Delete', 'DELETE', "shipping/v3/addresses/{$addressId}",
            [
            ]
        );
    }
}
