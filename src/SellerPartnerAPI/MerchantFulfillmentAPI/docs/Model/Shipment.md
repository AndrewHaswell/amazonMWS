# Shipment

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shipment_id** | [**\Swagger\Client\Model\ShipmentId**](ShipmentId.md) |  | 
**amazon_order_id** | [**\Swagger\Client\Model\AmazonOrderId**](AmazonOrderId.md) |  | 
**seller_order_id** | [**\Swagger\Client\Model\SellerOrderId**](SellerOrderId.md) |  | [optional] 
**item_list** | [**\Swagger\Client\Model\ItemList**](ItemList.md) |  | 
**ship_from_address** | [**\Swagger\Client\Model\Address**](Address.md) | The address of the sender. | 
**ship_to_address** | [**\Swagger\Client\Model\Address**](Address.md) | The destination address for the shipment. | 
**package_dimensions** | [**\Swagger\Client\Model\PackageDimensions**](PackageDimensions.md) |  | 
**weight** | [**\Swagger\Client\Model\Weight**](Weight.md) | The package weight. | 
**insurance** | [**\Swagger\Client\Model\CurrencyAmount**](CurrencyAmount.md) | If DeclaredValue was specified in a previous call to the createShipment operation, then Insurance indicates the amount that the carrier will use to insure the shipment. If DeclaredValue was not specified with a previous call to the createShipment operation, then the shipment will be insured for the carrier&#39;s minimum insurance amount, or the combined sale prices that the items are listed for in the shipment, whichever is less. | 
**shipping_service** | [**\Swagger\Client\Model\ShippingService**](ShippingService.md) |  | 
**label** | [**\Swagger\Client\Model\Label**](Label.md) | Data for creating a shipping label and dimensions for printing the label. If the shipment is canceled, an empty Label is returned. | 
**status** | [**\Swagger\Client\Model\ShipmentStatus**](ShipmentStatus.md) | The shipment status. | 
**tracking_id** | [**\Swagger\Client\Model\TrackingId**](TrackingId.md) |  | [optional] 
**created_date** | [**\Swagger\Client\Model\Timestamp**](Timestamp.md) | The date and time the shipment was created. | 
**last_updated_date** | [**\Swagger\Client\Model\Timestamp**](Timestamp.md) | The date and time of the last update. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


