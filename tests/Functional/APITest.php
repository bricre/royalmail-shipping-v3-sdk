<?php

namespace RoyalMail\SDK\V3Shipping\Test\Functional;

use GuzzleHttp\Client as Guzzle;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\MessageFormatter;
use GuzzleHttp\Middleware;
use GuzzleHttp\Psr7\Response;
use Monolog\Handler\ErrorLogHandler;
use Monolog\Logger;
use OpenAPI\Runtime\Client;
use OpenAPI\Runtime\SimplePsrResponseHandlerStack;
use PHPUnit\Framework\TestCase;
use Prophecy\Argument;
use Prophecy\PhpUnit\ProphecyTrait;
use Psr\Log\LogLevel;
use RoyalMail\SDK\V3Shipping\Api\Shipments;
use RoyalMail\SDK\V3Shipping\Model\CreateShipment\Shipment as ShipmentModel;
use RoyalMail\SDK\V3Shipping\Model\ShipmentCreateResponse;
use RoyalMail\SDK\V3Shipping\Model\Shipper;
use RoyalMail\SDK\V3Shipping\ResponseTypes;

class APITest extends TestCase
{
    use ProphecyTrait;

    public static function setUpBeforeClass(): void
    {
        $handler = HandlerStack::create();
        $logger = new Logger('unittest');

        $logger->pushHandler(new ErrorLogHandler());
        $handler->push(Middleware::log(
            $logger,
            new MessageFormatter('{method} Response: {res_body}'),
            LogLevel::DEBUG
        ));
        $handler->push(Middleware::log(
            $logger,
            new MessageFormatter('{method} : {uri} - Request: {req_body}'),
            LogLevel::DEBUG
        ));

        Client::configure(
            new Guzzle([
                'base_uri' => 'https://api.royalmail.net',
                'headers' => [
                    'Accept' => 'application/json',
                    'X-Accept-RMG-Terms' => 'yes',
                    'X-IBM-Client-Id' => getenv('X-IBM-Client-Id'),
                    'X-IBM-Client-Secret' => getenv('X-IBM-Client-Secret'),
                ],
                'handler' => $handler,
                'debug' => true
            ]),
            new SimplePsrResponseHandlerStack(new ResponseTypes())
        );
    }


    public function testCreateShipment()
    {
        $response = new Response(200, [], json_encode(new ShipmentCreateResponse()));
        $client = $this->prophesize(Guzzle::class);
        $client->send(Argument::any(), Argument::any())->willReturn($response);

        $API = new Shipments(Client::configure($client->reveal(), new SimplePsrResponseHandlerStack(new ResponseTypes())));
        $model = new ShipmentModel();
        $model->Shipper = new Shipper();


        $response = $API->_Create($model);
        $this->assertInstanceOf(ShipmentCreateResponse::class, $response);
    }


}
