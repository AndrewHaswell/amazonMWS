# FulfillmentPreview

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shipping_speed_category** | [**\Swagger\Client\Model\ShippingSpeedCategory**](ShippingSpeedCategory.md) |  | 
**scheduled_delivery_info** | [**\Swagger\Client\Model\ScheduledDeliveryInfo**](ScheduledDeliveryInfo.md) |  | [optional] 
**is_fulfillable** | **bool** | When true, this fulfillment order preview is fulfillable. | 
**is_cod_capable** | **bool** | When true, this fulfillment order preview is for COD (Cash On Delivery). | 
**estimated_shipping_weight** | [**\Swagger\Client\Model\Weight**](Weight.md) | Estimated shipping weight for this fulfillment order preview. | [optional] 
**estimated_fees** | [**\Swagger\Client\Model\FeeList**](FeeList.md) | The estimated fulfillment fees for this fulfillment order preview, if applicable. | [optional] 
**fulfillment_preview_shipments** | [**\Swagger\Client\Model\FulfillmentPreviewShipmentList**](FulfillmentPreviewShipmentList.md) |  | [optional] 
**unfulfillable_preview_items** | [**\Swagger\Client\Model\UnfulfillablePreviewItemList**](UnfulfillablePreviewItemList.md) |  | [optional] 
**order_unfulfillable_reasons** | [**\Swagger\Client\Model\StringList**](StringList.md) | Error codes associated with the fulfillment order preview that indicate why the order is not fulfillable.  Error code examples:  DeliverySLAUnavailable InvalidDestinationAddress | [optional] 
**marketplace_id** | **string** | The marketplace the fulfillment order is placed against. | 
**feature_constraints** | [**\Swagger\Client\Model\FeatureSettings[]**](FeatureSettings.md) | A list of features and their fulfillment policies to apply to the order. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


