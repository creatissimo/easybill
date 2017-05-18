# Swagger\Client\DocumentPaymentApi

All URIs are relative to *https://api.easybill.de/rest/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**documentPaymentsGet**](DocumentPaymentApi.md#documentPaymentsGet) | **GET** /document-payments | Fetch document payments list
[**documentPaymentsIdDelete**](DocumentPaymentApi.md#documentPaymentsIdDelete) | **DELETE** /document-payments/{id} | Delete document payment
[**documentPaymentsIdGet**](DocumentPaymentApi.md#documentPaymentsIdGet) | **GET** /document-payments/{id} | Fetch document payment
[**documentPaymentsPost**](DocumentPaymentApi.md#documentPaymentsPost) | **POST** /document-payments | Create document payment


# **documentPaymentsGet**
> \Swagger\Client\Model\DocumentPayments documentPaymentsGet($limit, $document_id, $payment_at, $reference)

Fetch document payments list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');
// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\DocumentPaymentApi();
$limit = 56; // int | Limited the result. Default is 100. Maximum can be 1000.
$document_id = "document_id_example"; // string | Filter payments by document_id. You can add multiple ids separate by comma like id,id,id.
$payment_at = "payment_at_example"; // string | Filter payments by payment_at. You can filter one date with payment_at=2014-12-10 or between like 2015-01-01,2015-12-31.
$reference = "reference_example"; // string | Filter payments by reference. You can add multiple references separate by comma like id,id,id.

try {
    $result = $api_instance->documentPaymentsGet($limit, $document_id, $payment_at, $reference);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentPaymentApi->documentPaymentsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Limited the result. Default is 100. Maximum can be 1000. | [optional]
 **document_id** | **string**| Filter payments by document_id. You can add multiple ids separate by comma like id,id,id. | [optional]
 **payment_at** | **string**| Filter payments by payment_at. You can filter one date with payment_at&#x3D;2014-12-10 or between like 2015-01-01,2015-12-31. | [optional]
 **reference** | **string**| Filter payments by reference. You can add multiple references separate by comma like id,id,id. | [optional]

### Return type

[**\Swagger\Client\Model\DocumentPayments**](../Model/DocumentPayments.md)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **documentPaymentsIdDelete**
> documentPaymentsIdDelete($id)

Delete document payment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');
// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\DocumentPaymentApi();
$id = 789; // int | ID of document payment

try {
    $api_instance->documentPaymentsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling DocumentPaymentApi->documentPaymentsIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of document payment |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **documentPaymentsIdGet**
> \Swagger\Client\Model\DocumentPayment documentPaymentsIdGet($id)

Fetch document payment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');
// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\DocumentPaymentApi();
$id = 789; // int | ID of document payment

try {
    $result = $api_instance->documentPaymentsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentPaymentApi->documentPaymentsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of document payment |

### Return type

[**\Swagger\Client\Model\DocumentPayment**](../Model/DocumentPayment.md)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **documentPaymentsPost**
> \Swagger\Client\Model\DocumentPayment documentPaymentsPost($body, $paid)

Create document payment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');
// Configure HTTP basic authorization: basicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\DocumentPaymentApi();
$body = new \Swagger\Client\Model\DocumentPayment(); // \Swagger\Client\Model\DocumentPayment | 
$paid = true; // bool | Mark document as paid when amount less then payment amount.

try {
    $result = $api_instance->documentPaymentsPost($body, $paid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentPaymentApi->documentPaymentsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DocumentPayment**](../Model/\Swagger\Client\Model\DocumentPayment.md)|  |
 **paid** | **bool**| Mark document as paid when amount less then payment amount. | [optional]

### Return type

[**\Swagger\Client\Model\DocumentPayment**](../Model/DocumentPayment.md)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

