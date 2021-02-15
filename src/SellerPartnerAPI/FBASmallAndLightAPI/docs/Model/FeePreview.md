# FeePreview

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**asin** | **string** | The Amazon Standard Identification Number (ASIN) value used to identify the item. | [optional] 
**price** | [**\Swagger\Client\Model\MoneyType**](MoneyType.md) | The price that the seller plans to charge for the item. | [optional] 
**fee_breakdown** | [**\Swagger\Client\Model\FeeLineItem[]**](FeeLineItem.md) | A list of the Small and Light fees for the item. | [optional] 
**total_fees** | [**\Swagger\Client\Model\MoneyType**](MoneyType.md) | The total fees charged if the item participated in the Small and Light program. | [optional] 
**errors** | [**\Swagger\Client\Model\ErrorList**](ErrorList.md) | One or more unexpected errors occurred during the getSmallAndLightFeePreview operation. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


