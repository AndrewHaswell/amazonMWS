# CreateShipmentRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shipment_request_details** | [**\Swagger\Client\Model\ShipmentRequestDetails**](ShipmentRequestDetails.md) | Shipment information required for creating a shipment. | 
**shipping_service_id** | [**\Swagger\Client\Model\ShippingServiceIdentifier**](ShippingServiceIdentifier.md) |  | 
**shipping_service_offer_id** | **string** | Identifies a shipping service order made by a carrier. | [optional] 
**hazmat_type** | [**\Swagger\Client\Model\HazmatType**](HazmatType.md) | Hazardous materials options for a package. Consult the terms and conditions for each carrier for more information about hazardous materials. | [optional] 
**label_format_option** | [**\Swagger\Client\Model\LabelFormatOptionRequest**](LabelFormatOptionRequest.md) |  | [optional] 
**shipment_level_seller_inputs_list** | [**\Swagger\Client\Model\AdditionalSellerInputsList**](AdditionalSellerInputsList.md) | A list of additional seller inputs required to ship this shipment. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


