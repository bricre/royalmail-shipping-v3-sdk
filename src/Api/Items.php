<?php

namespace RoyalMail\SDK\V3Shipping\Api;

use OpenAPI\Runtime\AbstractAPI;
use RoyalMail\SDK\V3Shipping\Model\Item;
use RoyalMail\SDK\V3Shipping\Model\ItemResponse;

class Items extends AbstractAPI
{
    /**
     * Get all of your stored items.
     *
     * @return array
     */
    public function _GetAll(): array
    {
        return $this->client->request('Items_GetAll', 'GET', 'shipping/v3/items',
            [
            ]
        );
    }

    /**
     * Add a new item to your stored items that you can then use in your shipment requests.
     *
     * @param Item $Model create Item Add a new item to your stored items that you can then use in your shipment requests
     *
     * @return ItemResponse
     */
    public function _Create(Item $Model): ItemResponse
    {
        return $this->client->request('Items_Create', 'POST', 'shipping/v3/items',
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }

    /**
     * Get the item specified by your unique Item ID.
     *
     * @param $itemId Your unique Item ID
     *
     * @return Item
     */
    public function _Get($itemId): Item
    {
        return $this->client->request('Items_Get', 'GET', "shipping/v3/items/{$itemId}",
            [
            ]
        );
    }

    /**
     * Update an item that is already stored with new details. The whole item will be replaced with new details.
     *
     * @param $itemId Your unique Item ID of the item to update
     * @param Item $Model Update item Update an item that is already stored with new details. The whole item will be replaced with new details.
     *
     * @return ItemResponse
     */
    public function _Update($itemId, Item $Model): ItemResponse
    {
        return $this->client->request('Items_Update', 'PUT', "shipping/v3/items/{$itemId}",
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }

    /**
     * Deletes the specified item.
     *
     * @param $itemId Your unique Item ID of the item to delete
     *
     * @return ItemResponse
     */
    public function _Delete($itemId): ItemResponse
    {
        return $this->client->request('Items_Delete', 'DELETE', "shipping/v3/items/{$itemId}",
            [
            ]
        );
    }
}
