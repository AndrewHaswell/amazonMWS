# FulfillmentOrder

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**seller_fulfillment_order_id** | **string** | The fulfillment order identifier submitted with the createFulfillmentOrder operation. | 
**marketplace_id** | **string** | The identifier for the marketplace the fulfillment order is placed against. | 
**displayable_order_id** | **string** | A fulfillment order identifier submitted with the createFulfillmentOrder operation. Displays as the order identifier in recipient-facing materials such as the packing slip. | 
**displayable_order_date** | [**\Swagger\Client\Model\Timestamp**](Timestamp.md) | A date and time submitted with the createFulfillmentOrder operation. Displays as the order date in recipient-facing materials such as the packing slip. | 
**displayable_order_comment** | **string** | A text block submitted with the createFulfillmentOrder operation. Displays in recipient-facing materials such as the packing slip. | 
**shipping_speed_category** | [**\Swagger\Client\Model\ShippingSpeedCategory**](ShippingSpeedCategory.md) |  | 
**delivery_window** | [**\Swagger\Client\Model\DeliveryWindow**](DeliveryWindow.md) |  | [optional] 
**destination_address** | [**\Swagger\Client\Model\Address**](Address.md) | The destination address submitted with the createFulfillmentOrder operation. | 
**fulfillment_action** | [**\Swagger\Client\Model\FulfillmentAction**](FulfillmentAction.md) |  | [optional] 
**fulfillment_policy** | [**\Swagger\Client\Model\FulfillmentPolicy**](FulfillmentPolicy.md) |  | [optional] 
**cod_settings** | [**\Swagger\Client\Model\CODSettings**](CODSettings.md) |  | [optional] 
**received_date** | [**\Swagger\Client\Model\Timestamp**](Timestamp.md) | The date and time that the fulfillment order was received by an Amazon fulfillment center. | 
**fulfillment_order_status** | [**\Swagger\Client\Model\FulfillmentOrderStatus**](FulfillmentOrderStatus.md) |  | 
**status_updated_date** | [**\Swagger\Client\Model\Timestamp**](Timestamp.md) | The date and time that the status of the fulfillment order last changed, in ISO 8601 date time format. | 
**notification_emails** | [**\Swagger\Client\Model\NotificationEmailList**](NotificationEmailList.md) |  | [optional] 
**feature_constraints** | [**\Swagger\Client\Model\FeatureSettings[]**](FeatureSettings.md) | A list of features and their fulfillment policies to apply to the order. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


