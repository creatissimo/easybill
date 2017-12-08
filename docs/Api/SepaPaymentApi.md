# Swagger\Client\SepaPaymentApi

All URIs are relative to *https://api.easybill.de/rest/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**sepaPaymentsGet**](SepaPaymentApi.md#sepaPaymentsGet) | **GET** /sepa-payments | Fetch SEPA payments list
[**sepaPaymentsIdDelete**](SepaPaymentApi.md#sepaPaymentsIdDelete) | **DELETE** /sepa-payments/{id} | Delete SEPA payment
[**sepaPaymentsIdGet**](SepaPaymentApi.md#sepaPaymentsIdGet) | **GET** /sepa-payments/{id} | Fetch SEPA payment
[**sepaPaymentsIdPut**](SepaPaymentApi.md#sepaPaymentsIdPut) | **PUT** /sepa-payments/{id} | Update SEPA payment
[**sepaPaymentsPost**](SepaPaymentApi.md#sepaPaymentsPost) | **POST** /sepa-payments | Create SEPA payment


# **sepaPaymentsGet**
> \Swagger\Client\Model\SEPAPayments sepaPaymentsGet($limit, $document_id)

Fetch SEPA payments list

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

$api_instance = new Swagger\Client\Api\SepaPaymentApi();
$limit = 56; // int | Limited the result. Default is 100. Maximum can be 1000.
$document_id = "document_id_example"; // string | Filter SEPA payment by document_id. You can add multiple ids separate by comma like id,id,id.

try {
    $result = $api_instance->sepaPaymentsGet($limit, $document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SepaPaymentApi->sepaPaymentsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Limited the result. Default is 100. Maximum can be 1000. | [optional]
 **document_id** | **string**| Filter SEPA payment by document_id. You can add multiple ids separate by comma like id,id,id. | [optional]

### Return type

[**\Swagger\Client\Model\SEPAPayments**](../Model/SEPAPayments.md)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sepaPaymentsIdDelete**
> sepaPaymentsIdDelete($id)

Delete SEPA payment

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

$api_instance = new Swagger\Client\Api\SepaPaymentApi();
$id = 789; // int | ID of SPEA payment

try {
    $api_instance->sepaPaymentsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling SepaPaymentApi->sepaPaymentsIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of SPEA payment |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sepaPaymentsIdGet**
> \Swagger\Client\Model\SEPAPayment sepaPaymentsIdGet($id)

Fetch SEPA payment

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

$api_instance = new Swagger\Client\Api\SepaPaymentApi();
$id = 789; // int | ID of SEPA payment

try {
    $result = $api_instance->sepaPaymentsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SepaPaymentApi->sepaPaymentsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of SEPA payment |

### Return type

[**\Swagger\Client\Model\SEPAPayment**](../Model/SEPAPayment.md)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sepaPaymentsIdPut**
> \Swagger\Client\Model\SEPAPayment sepaPaymentsIdPut($id, $body)

Update SEPA payment

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

$api_instance = new Swagger\Client\Api\SepaPaymentApi();
$id = 789; // int | ID of SEPA payment
$body = new \Swagger\Client\Model\SEPAPayment(); // \Swagger\Client\Model\SEPAPayment | 

try {
    $result = $api_instance->sepaPaymentsIdPut($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SepaPaymentApi->sepaPaymentsIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of SEPA payment |
 **body** | [**\Swagger\Client\Model\SEPAPayment**](../Model/SEPAPayment.md)|  |

### Return type

[**\Swagger\Client\Model\SEPAPayment**](../Model/SEPAPayment.md)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sepaPaymentsPost**
> \Swagger\Client\Model\SEPAPayment sepaPaymentsPost($body)

Create SEPA payment

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

$api_instance = new Swagger\Client\Api\SepaPaymentApi();
$body = new \Swagger\Client\Model\SEPAPayment(); // \Swagger\Client\Model\SEPAPayment | 

try {
    $result = $api_instance->sepaPaymentsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SepaPaymentApi->sepaPaymentsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SEPAPayment**](../Model/SEPAPayment.md)|  |

### Return type

[**\Swagger\Client\Model\SEPAPayment**](../Model/SEPAPayment.md)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

