<?php

namespace RoyalMail\SDK\V3Shipping\Api;

use OpenAPI\Runtime\AbstractAPI;
use RoyalMail\SDK\V3Shipping\Model\ManifestCarrierCodesRequest;
use RoyalMail\SDK\V3Shipping\Model\ManifestRequest;
use RoyalMail\SDK\V3Shipping\Model\ManifestResponse;
use RoyalMail\SDK\V3Shipping\Model\ManifestServiceCodesRequest;

class Manifests extends AbstractAPI
{
    /**
     * Manifest all shipments that are ready to manifest for a single Posting Location.<br />             <br />Required to confirm parcels are ready to despatch.<br />Generates the required paperwork to despatch your parcels. <br />One or more manifests, including the base 64 encoded PDF and manifest number will be returned.<br />            <br />*Note: All average weight shipments are ignored and need to be closed out via Shipment Processing*.
     *
     * @param ManifestRequest $Model Manifest All Shipments Manifest all shipments that are ready to manifest for a single Posting Location.<br />             <br />Required to confirm parcels are ready to despatch.<br />Generates the required paperwork to despatch your parcels. <br />One or more manifests, including the base 64 encoded PDF and manifest number will be returned.<br />            <br />*Note: All average weight shipments are ignored and need to be closed out via Shipment Processing*
     *
     * @return ManifestResponse
     */
    public function _Create(ManifestRequest $Model): ManifestResponse
    {
        return $this->client->request('Manifests_Create', 'POST', 'shipping/v3/manifests',
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }

    /**
     * Manifest shipments created with the given carrier codes that are ready to manifest for a single Posting Location.<br />            <br />Required to confirm parcels are ready to despatch.<br />Generates the required paperwork to despatch your parcels. <br />One or more manifests, including the base 64 encoded PDF and manifest number will be returned.<br />            <br />*Note: All average weight shipments are ignored and need to be closed out via Shipment Processing*.
     *
     * @param ManifestCarrierCodesRequest $Model Manifest by Carrier Code(s) Manifest shipments created with the given carrier codes that are ready to manifest for a single Posting Location.<br />            <br />Required to confirm parcels are ready to despatch.<br />Generates the required paperwork to despatch your parcels. <br />One or more manifests, including the base 64 encoded PDF and manifest number will be returned.<br />            <br />*Note: All average weight shipments are ignored and need to be closed out via Shipment Processing*
     *
     * @return ManifestResponse
     */
    public function _CreateByCarrier(ManifestCarrierCodesRequest $Model): ManifestResponse
    {
        return $this->client->request('Manifests_CreateByCarrier', 'POST', 'shipping/v3/manifests/bycarrier',
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }

    /**
     * Manifest shipments created with the given service codes that are ready to manifest for a single Posting Location.<br />            <br />Required to confirm parcels are ready to despatch.<br />Generates the required paperwork to despatch your parcels. <br />One or more manifests, including the base 64 encoded PDF and manifest number will be returned.<br />            <br />*Note: All average weight shipments are ignored and need to be closed out via Shipment Processing*.
     *
     * @param ManifestServiceCodesRequest $Model Manifest by Service Code(s) Manifest shipments created with the given service codes that are ready to manifest for a single Posting Location.<br />            <br />Required to confirm parcels are ready to despatch.<br />Generates the required paperwork to despatch your parcels. <br />One or more manifests, including the base 64 encoded PDF and manifest number will be returned.<br />            <br />*Note: All average weight shipments are ignored and need to be closed out via Shipment Processing*
     *
     * @return ManifestResponse
     */
    public function _CreateByService(ManifestServiceCodesRequest $Model): ManifestResponse
    {
        return $this->client->request('Manifests_CreateByService', 'POST', 'shipping/v3/manifests/byservice',
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }
}
