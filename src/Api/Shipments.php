<?php

namespace RoyalMail\SDK\V3Shipping\Api;

use OpenAPI\Runtime\AbstractAPI;
use RoyalMail\SDK\V3Shipping\Model\CreateShipment\Shipment;
use RoyalMail\SDK\V3Shipping\Model\PrintDocumentRequest;
use RoyalMail\SDK\V3Shipping\Model\PrintDocumentResponse;
use RoyalMail\SDK\V3Shipping\Model\PrintLabelRequest;
use RoyalMail\SDK\V3Shipping\Model\PrintLabelResponse;
use RoyalMail\SDK\V3Shipping\Model\ServiceAvailability\Shipment as ShipmentServiceAvailability;
use RoyalMail\SDK\V3Shipping\Model\ServiceAvailabilityResponse;
use RoyalMail\SDK\V3Shipping\Model\ShipmentCreateResponse;
use RoyalMail\SDK\V3Shipping\Model\ShipmentsCancelResponse;
use RoyalMail\SDK\V3Shipping\Model\ShipmentsDeferResponse;
use RoyalMail\SDK\V3Shipping\Model\ShipmentsHoldResponse;
use RoyalMail\SDK\V3Shipping\Model\ShipmentsReleaseRequest;
use RoyalMail\SDK\V3Shipping\Model\ShipmentsReleaseResponse;

class Shipments extends AbstractAPI
{
    /**
     * Use to generate the final delivery label for your packages.<br />            <br />The request is split into several sections:<br />            <br />**Shipper** - who and where the parcel is coming from - optional if the posting location is to be used.<br />**Destination** - who and where the parcel is going to.<br />**Shipment Information** - overall package details, individual item details and requested service information.
     *
     * @param Shipment $Model Create Shipment Use to generate the final delivery label for your packages.<br />            <br />The request is split into several sections:<br />            <br />**Shipper** - who and where the parcel is coming from - optional if the posting location is to be used.<br />**Destination** - who and where the parcel is going to.<br />**Shipment Information** - overall package details, individual item details and requested service information.
     *
     * @return ShipmentCreateResponse
     */
    public function _Create(Shipment $Model): ShipmentCreateResponse
    {
        return $this->client->request('Shipments_Create', 'POST', 'shipping/v3/shipments',
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }

    /**
     * Prints the requested document for the shipment.<br />If item information, description of goods or reason for export have not been provided then the document cannot be printed.<br />            <br />This service can only be used before the shipment has been confirmed either by calling the manifest create request or by closing out via the User Interface.
     *
     * @param $shipmentId Shipment Id<br />The tracking number or Unique Id of the shipment to print
     * @param PrintDocumentRequest $Model Print Document Prints the requested document for the shipment.<br />If item information, description of goods or reason for export have not been provided then the document cannot be printed.<br />            <br />This service can only be used before the shipment has been confirmed either by calling the manifest create request or by closing out via the User Interface.
     *
     * @return PrintDocumentResponse
     */
    public function _PrintDocument($shipmentId, PrintDocumentRequest $Model): PrintDocumentResponse
    {
        return $this->client->request('Shipments_PrintDocument', 'PUT', "shipping/v3/shipments/{$shipmentId}/printDocument",
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }

    /**
     * Prints the label for the shipment.<br />Moves the shipment to processed, ready to manifest, if the shipment was not already in a processed state.<br />This service can only be used before the shipment has been confirmed either by calling the manifest create request or by closing out via the User Interface.<br />**On Hold Shipment**<br />Calling print label on a held shipment will release the shipment from hold and update the shipment date to today.
     *
     * @param $shipmentId Shipment Id<br />The tracking number or Unique Id of the shipment to print
     * @param PrintLabelRequest $Model Print Label Prints the label for the shipment.<br />Moves the shipment to processed, ready to manifest, if the shipment was not already in a processed state.<br />This service can only be used before the shipment has been confirmed either by calling the manifest create request or by closing out via the User Interface.<br />**On Hold Shipment**<br />Calling print label on a held shipment will release the shipment from hold and update the shipment date to today.
     *
     * @return PrintLabelResponse
     */
    public function _PrintLabel($shipmentId, PrintLabelRequest $Model): PrintLabelResponse
    {
        return $this->client->request('Shipments_PrintLabel', 'PUT', "shipping/v3/shipments/{$shipmentId}/printLabel",
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }

    /**
     * Can be used to cancel/void one or more current shipping labels.<br />This service can only be used before the shipment has been confirmed either by calling the manifest create request or by closing out via the User Interface.<br />There can be a maximum of 99 cancellation requests per call.
     *
     * @return ShipmentsCancelResponse
     */
    public function _Cancel(): ShipmentsCancelResponse
    {
        return $this->client->request('Shipments_Cancel', 'PUT', 'shipping/v3/shipments/cancel',
            [
            ]
        );
    }

    /**
     * Used to update the shipment shipping date for a current shipment.<br />A shipment can be deferred by a maximum of 28 days from the date of the request.<br />This service can only be used before the shipment has been confirmed either by calling the manifest create request or by closing out via the User Interface.<br />There can be a maximum of 99 defer requests per call.
     *
     * @return ShipmentsDeferResponse
     */
    public function _Defer(): ShipmentsDeferResponse
    {
        return $this->client->request('Shipments_Defer', 'PUT', 'shipping/v3/shipments/defer',
            [
            ]
        );
    }

    /**
     * Used to put a shipment on hold indefinitely.<br />A shipment on hold will not be included in any closeouts, but instead will remain in its current state.<br />Calling printLabel will release the shipment from being held.<br />This service can only be used before the shipment has been confirmed either by calling the manifest create request or by closing out via the User Interface.<br />            <br />A hold reason must be provided and must match those set in Pro Shipping under your maintenance screens.<br />If no hold reasons exist, then shipments cannot be put on hold.<br />            <br />There can be a maximum of 99 hold requests per call.
     *
     * @return ShipmentsHoldResponse
     */
    public function _Hold(): ShipmentsHoldResponse
    {
        return $this->client->request('Shipments_Hold', 'PUT', 'shipping/v3/shipments/hold',
            [
            ]
        );
    }

    /**
     * Used to release a shipment from being on hold.<br />This service can only be used for shipments on hold.<br />            <br />Releasing a shipment from hold will update the shipment date to today's date and if the shipment is processed it will be included the next requested manifest.<br />            <br />There can be a maximum of 99 release requests per call.
     *
     * @param ShipmentsReleaseRequest $Model Release Shipments Used to release a shipment from being on hold.<br />This service can only be used for shipments on hold.<br />            <br />Releasing a shipment from hold will update the shipment date to today's date and if the shipment is processed it will be included the next requested manifest.<br />            <br />There can be a maximum of 99 release requests per call.
     *
     * @return ShipmentsReleaseResponse
     */
    public function _Release(ShipmentsReleaseRequest $Model): ShipmentsReleaseResponse
    {
        return $this->client->request('Shipments_Release', 'PUT', 'shipping/v3/shipments/release',
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }

    /**
     * Retrieve a list of available services for a potential shipment.<br />            <br />**Destination** - where the parcel is going to.<br />**Shipment Information** - overall package details and requested service requirements.
     *
     * @param ShipmentServiceAvailability $Model Service Availability Retrieve a list of available services for a potential shipment.<br />            <br />**Destination** - where the parcel is going to.<br />**Shipment Information** - overall package details and requested service requirements.
     *
     * @return ServiceAvailabilityResponse
     */
    public function _ServiceAvailability(ShipmentServiceAvailability $Model): ServiceAvailabilityResponse
    {
        return $this->client->request('Shipments_ServiceAvailability', 'POST', 'shipping/v3/shipments/serviceAvailability',
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }
}
