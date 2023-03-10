# Royal Mail Shipping v3 REST API PHP SDK

PHP SDK generated from [RoyalMail](https://developer.royalmail.net/)'s Swagger File

[![Latest Stable Version](https://poser.pugx.org/bricre/royalmail-shipping-v3-sdk/v)](https:://packagist.org/packages/bricre/royalmail-shipping-v3-sdk)
[![Total Downloads](https://poser.pugx.org/bricre/royalmail-shipping-v3-sdk/downloads)](https:://packagist.org/packages/bricre/royalmail-shipping-v3-sdk)
[![License](https://poser.pugx.org/bricre/royalmail-shipping-v3-sdk/license)](https:://packagist.org/packages/bricre/royalmail-shipping-v3-sdk)
[![codecov](https://codecov.io/gh/bricre/royalmail-shipping-v3-sdk/branch/master/graph/badge.svg?token=OVYRXPSW2Y)](https://codecov.io/gh/bricre/royalmail-shipping-v3-sdk)

## Usage

First you need to follow RoyalMail's instruction to reigster your App and get credentials approved

Then configure your client (you only need to do this once for the whole process), you can do this at your 
application's initialization stage:

```php
<?php
use GuzzleHttp\Client as Guzzle;
use OpenAPI\Runtime\Client;
use OpenAPI\Runtime\SimplePsrResponseHandlerStack;
use RoyalMail\SDK\V3Shipping\ResponseTypes;

Client::configure(
    new Guzzle([
        'base_uri' => 'https://api.royalmail.net',
        'headers'  => [
            'Accept'              => 'application/json',
            'X-Accept-RMG-Terms'  => 'yes',
            'X-IBM-Client-Id'     => getenv('X-IBM-Client-Id'),
            'X-IBM-Client-Secret' => getenv('X-IBM-Client-Secret'),
        ]
    ]),
    new SimplePsrResponseHandlerStack(new ResponseTypes()),
);
```

Then in your actual business logic, run one of the three API methods exposed by RoyalMail

```php
<?php
use RoyalMail\SDK\V2Tracking\Api\API;
use RoyalMail\SDK\V2Tracking\Model\EventsSuccessResponse;
use RoyalMail\SDK\V2Tracking\Model\SignatureSuccessResponse;
use RoyalMail\SDK\V2Tracking\Model\SummarySuccessResponse;

$API = new API();
/** @var SummarySuccessResponse $summery */
$summary = $API->summary(['mailPieceId'=>'AA999999999GB']);

/** @var EventsSuccessResponse $events */
$events = $API->events('AA999999999GB');

/** @var SignatureSuccessResponse $signature */
$signature = $API->signature('AA999999999GB');
```

Check [APITest](/tests/Functional/APITest.php) for more samples for how to debug
