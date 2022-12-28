<?php

namespace RoyalMail\SDK\V3Shipping;

use OpenAPI\Runtime\ResponseTypes as AbstractResponseTypes;

class ResponseTypes extends AbstractResponseTypes
{
    public static $types = [
        'Shipments_Create' => [
            '200.' => 'RoyalMail\\SDK\\V3Shipping\\Model\\ShipmentCreateResponse',
            '400.' => 'RoyalMail\\SDK\\V3Shipping\\Model\\ShipmentCreateResponse',
        ],
        'Shipments_PrintDocument' => [
            '200.' => 'RoyalMail\\SDK\\V3Shipping\\Model\\PrintDocumentResponse',
            '400.' => 'RoyalMail\\SDK\\V3Shipping\\Model\\PrintDocumentResponse',
            '404.' => 'RoyalMail\\SDK\\V3Shipping\\Model\\PrintDocumentResponse',
        ],
        'Shipments_PrintLabel' => [
            '200.' => 'RoyalMail\\SDK\\V3Shipping\\Model\\PrintLabelResponse',
            '400.' => 'RoyalMail\\SDK\\V3Shipping\\Model\\PrintLabelResponse',
            '404.' => 'RoyalMail\\SDK\\V3Shipping\\Model\\PrintLabelResponse',
        ],
        'Shipments_Cancel' => [
            '200.' => 'RoyalMail\\SDK\\V3Shipping\\Model\\ShipmentsCancelResponse',
            '400.' => 'RoyalMail\\SDK\\V3Shipping\\Model\\ShipmentsCancelResponse',
            '404.' => 'RoyalMail\\SDK\\V3Shipping\\Model\\ShipmentsCancelResponse',
        ],
        'Shipments_Defer' => [
            '200.' => 'RoyalMail\\SDK\\V3Shipping\\Model\\ShipmentsDeferResponse',
            '400.' => 'RoyalMail\\SDK\\V3Shipping\\Model\\ShipmentsDeferResponse',
            '404.' => 'RoyalMail\\SDK\\V3Shipping\\Model\\ShipmentsDeferResponse',
        ],
        'Shipments_Hold' => [
            '200.' => 'RoyalMail\\SDK\\V3Shipping\\Model\\ShipmentsHoldResponse',
            '400.' => 'RoyalMail\\SDK\\V3Shipping\\Model\\ShipmentsHoldResponse',
            '404.' => 'RoyalMail\\SDK\\V3Shipping\\Model\\ShipmentsHoldResponse',
        ],
        'Shipments_Release' => [
            '200.' => 'RoyalMail\\SDK\\V3Shipping\\Model\\ShipmentsReleaseResponse',
            '400.' => 'RoyalMail\\SDK\\V3Shipping\\Model\\ShipmentsReleaseResponse',
            '404.' => 'RoyalMail\\SDK\\V3Shipping\\Model\\ShipmentsReleaseResponse',
        ],
        'Shipments_ServiceAvailability' => [
            '200.' => 'RoyalMail\\SDK\\V3Shipping\\Model\\ServiceAvailabilityResponse',
            '400.' => 'RoyalMail\\SDK\\V3Shipping\\Model\\ServiceAvailabilityResponse',
        ],
        'Manifests_Create' => [
            '200.' => 'RoyalMail\\SDK\\V3Shipping\\Model\\ManifestResponse',
            '400.' => 'RoyalMail\\SDK\\V3Shipping\\Model\\ManifestResponse',
        ],
        'Manifests_CreateByCarrier' => [
            '200.' => 'RoyalMail\\SDK\\V3Shipping\\Model\\ManifestResponse',
            '400.' => 'RoyalMail\\SDK\\V3Shipping\\Model\\ManifestResponse',
        ],
        'Manifests_CreateByService' => [
            '200.' => 'RoyalMail\\SDK\\V3Shipping\\Model\\ManifestResponse',
            '400.' => 'RoyalMail\\SDK\\V3Shipping\\Model\\ManifestResponse',
        ],
        'Addresses_GetAll' => [
            '200.' => 'RoyalMail\\SDK\\V3Shipping\\Model\\Address[]',
        ],
        'Addresses_Create' => [
            '200.' => 'RoyalMail\\SDK\\V3Shipping\\Model\\AddressResponse',
            '400.' => 'RoyalMail\\SDK\\V3Shipping\\Model\\AddressResponse',
        ],
        'Addresses_Get' => [
            '200.' => 'RoyalMail\\SDK\\V3Shipping\\Model\\Address',
        ],
        'Addresses_Update' => [
            '200.' => 'RoyalMail\\SDK\\V3Shipping\\Model\\AddressResponse',
            '400.' => 'RoyalMail\\SDK\\V3Shipping\\Model\\AddressResponse',
            '404.' => 'RoyalMail\\SDK\\V3Shipping\\Model\\AddressResponse',
        ],
        'Addresses_Delete' => [
            '200.' => 'RoyalMail\\SDK\\V3Shipping\\Model\\AddressResponse',
            '400.' => 'RoyalMail\\SDK\\V3Shipping\\Model\\AddressResponse',
            '404.' => 'RoyalMail\\SDK\\V3Shipping\\Model\\AddressResponse',
        ],
        'Items_GetAll' => [
            '200.' => 'RoyalMail\\SDK\\V3Shipping\\Model\\Item[]',
        ],
        'Items_Create' => [
            '200.' => 'RoyalMail\\SDK\\V3Shipping\\Model\\ItemResponse',
            '400.' => 'RoyalMail\\SDK\\V3Shipping\\Model\\ItemResponse',
        ],
        'Items_Get' => [
            '200.' => 'RoyalMail\\SDK\\V3Shipping\\Model\\Item',
        ],
        'Items_Update' => [
            '200.' => 'RoyalMail\\SDK\\V3Shipping\\Model\\ItemResponse',
            '400.' => 'RoyalMail\\SDK\\V3Shipping\\Model\\ItemResponse',
        ],
        'Items_Delete' => [
            '200.' => 'RoyalMail\\SDK\\V3Shipping\\Model\\ItemResponse',
        ],
        'Packaging_GetAll' => [
            '200.' => 'RoyalMail\\SDK\\V3Shipping\\Model\\Packaging[]',
        ],
        'Packaging_Create' => [
            '200.' => 'RoyalMail\\SDK\\V3Shipping\\Model\\PackagingResponse',
            '400.' => 'RoyalMail\\SDK\\V3Shipping\\Model\\PackagingResponse',
        ],
        'Packaging_Get' => [
            '200.' => 'RoyalMail\\SDK\\V3Shipping\\Model\\Packaging',
        ],
        'Packaging_Update' => [
            '200.' => 'RoyalMail\\SDK\\V3Shipping\\Model\\PackagingResponse',
            '400.' => 'RoyalMail\\SDK\\V3Shipping\\Model\\PackagingResponse',
        ],
        'Packaging_Delete' => [
            '200.' => 'RoyalMail\\SDK\\V3Shipping\\Model\\PackagingResponse',
        ],
    ];
}
