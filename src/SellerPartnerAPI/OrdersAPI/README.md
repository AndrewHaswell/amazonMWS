# SwaggerClient-php
The Selling Partner API for Orders helps you programmatically retrieve order information. These APIs let you develop fast, flexible, custom applications in areas like order synchronization, order research, and demand-based decision support tools.

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: v0
- Build package: io.swagger.codegen.languages.PhpClientCodegen
For more information, please visit [https://sellercentral.amazon.com/gp/mws/contactus.html](https://sellercentral.amazon.com/gp/mws/contactus.html)

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new OrdersApi\Api\OrdersV0Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_id = "order_id_example"; // string | An Amazon-defined order identifier, in 3-7-7 format.

try {
    $result = $apiInstance->getOrder($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersV0Api->getOrder: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://sellingpartnerapi-na.amazon.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*OrdersV0Api* | [**getOrder**](docs/Api/OrdersV0Api.md#getorder) | **GET** /orders/v0/orders/{orderId} | 
*OrdersV0Api* | [**getOrderAddress**](docs/Api/OrdersV0Api.md#getorderaddress) | **GET** /orders/v0/orders/{orderId}/address | 
*OrdersV0Api* | [**getOrderBuyerInfo**](docs/Api/OrdersV0Api.md#getorderbuyerinfo) | **GET** /orders/v0/orders/{orderId}/buyerInfo | 
*OrdersV0Api* | [**getOrderItems**](docs/Api/OrdersV0Api.md#getorderitems) | **GET** /orders/v0/orders/{orderId}/orderItems | 
*OrdersV0Api* | [**getOrderItemsBuyerInfo**](docs/Api/OrdersV0Api.md#getorderitemsbuyerinfo) | **GET** /orders/v0/orders/{orderId}/orderItems/buyerInfo | 
*OrdersV0Api* | [**getOrders**](docs/Api/OrdersV0Api.md#getorders) | **GET** /orders/v0/orders | 


## Documentation For Models

 - [Address](docs/Model/Address.md)
 - [BuyerCustomizedInfoDetail](docs/Model/BuyerCustomizedInfoDetail.md)
 - [BuyerTaxInfo](docs/Model/BuyerTaxInfo.md)
 - [Error](docs/Model/Error.md)
 - [ErrorList](docs/Model/ErrorList.md)
 - [FulfillmentInstruction](docs/Model/FulfillmentInstruction.md)
 - [GetOrderAddressResponse](docs/Model/GetOrderAddressResponse.md)
 - [GetOrderBuyerInfoResponse](docs/Model/GetOrderBuyerInfoResponse.md)
 - [GetOrderItemsBuyerInfoResponse](docs/Model/GetOrderItemsBuyerInfoResponse.md)
 - [GetOrderItemsResponse](docs/Model/GetOrderItemsResponse.md)
 - [GetOrderResponse](docs/Model/GetOrderResponse.md)
 - [GetOrdersResponse](docs/Model/GetOrdersResponse.md)
 - [Money](docs/Model/Money.md)
 - [Order](docs/Model/Order.md)
 - [OrderAddress](docs/Model/OrderAddress.md)
 - [OrderBuyerInfo](docs/Model/OrderBuyerInfo.md)
 - [OrderItem](docs/Model/OrderItem.md)
 - [OrderItemBuyerInfo](docs/Model/OrderItemBuyerInfo.md)
 - [OrderItemBuyerInfoList](docs/Model/OrderItemBuyerInfoList.md)
 - [OrderItemList](docs/Model/OrderItemList.md)
 - [OrderItemsBuyerInfoList](docs/Model/OrderItemsBuyerInfoList.md)
 - [OrderItemsList](docs/Model/OrderItemsList.md)
 - [OrderList](docs/Model/OrderList.md)
 - [OrdersList](docs/Model/OrdersList.md)
 - [PaymentExecutionDetailItem](docs/Model/PaymentExecutionDetailItem.md)
 - [PaymentExecutionDetailItemList](docs/Model/PaymentExecutionDetailItemList.md)
 - [PaymentMethodDetailItemList](docs/Model/PaymentMethodDetailItemList.md)
 - [PointsGrantedDetail](docs/Model/PointsGrantedDetail.md)
 - [ProductInfoDetail](docs/Model/ProductInfoDetail.md)
 - [PromotionIdList](docs/Model/PromotionIdList.md)
 - [TaxClassification](docs/Model/TaxClassification.md)
 - [TaxCollection](docs/Model/TaxCollection.md)


## Documentation For Authorization

 All endpoints do not require authorization.


## Author




