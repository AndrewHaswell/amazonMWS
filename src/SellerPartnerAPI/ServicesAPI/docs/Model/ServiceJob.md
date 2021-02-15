# ServiceJob

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**create_time** | [**\DateTime**](\DateTime.md) | The date and time of the creation of the job, in ISO 8601 format. | [optional] 
**service_job_id** | [**\Swagger\Client\Model\ServiceJobId**](ServiceJobId.md) | The service job identifier. | [optional] 
**service_job_status** | **string** | The status of the service job. | [optional] 
**scope_of_work** | [**\Swagger\Client\Model\ScopeOfWork**](ScopeOfWork.md) | The scope of work for the order. | [optional] 
**seller** | [**\Swagger\Client\Model\Seller**](Seller.md) | Information about the seller of the service job. | [optional] 
**service_job_provider** | [**\Swagger\Client\Model\ServiceJobProvider**](ServiceJobProvider.md) | Information about the service job provider. | [optional] 
**preferred_appointment_times** | [**\Swagger\Client\Model\AppointmentTime[]**](AppointmentTime.md) | A list of appointment windows preferred by the buyer. Included only if the buyer selected appointment windows when creating the order. | [optional] 
**appointments** | [**\Swagger\Client\Model\Appointment[]**](Appointment.md) | A list of appointments. | [optional] 
**service_order_id** | [**\Swagger\Client\Model\OrderId**](OrderId.md) | The Amazon-defined identifier for an order placed by the buyer, in 3-7-7 format. | [optional] 
**marketplace_id** | **string** | The marketplace identifier. | [optional] 
**buyer** | [**\Swagger\Client\Model\Buyer**](Buyer.md) | Information about the buyer. | [optional] 
**associated_items** | [**\Swagger\Client\Model\AssociatedItem[]**](AssociatedItem.md) | A list of items associated with the service job. | [optional] 
**service_location** | [**\Swagger\Client\Model\ServiceLocation**](ServiceLocation.md) | Information about the location of the service job. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


