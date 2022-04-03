# Swagger\Client\SerialNumberApi

All URIs are relative to *https://api.easybill.de/rest/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**serialNumbersGet**](SerialNumberApi.md#serialnumbersget) | **GET** /serial-numbers | Fetch a list of serial numbers for positions
[**serialNumbersIdDelete**](SerialNumberApi.md#serialnumbersiddelete) | **DELETE** /serial-numbers/{id} | Delete a serial number for a position
[**serialNumbersIdGet**](SerialNumberApi.md#serialnumbersidget) | **GET** /serial-numbers/{id} | Fetch a serial number for a position
[**serialNumbersPost**](SerialNumberApi.md#serialnumberspost) | **POST** /serial-numbers | Create s serial number for a position

# **serialNumbersGet**
> \Swagger\Client\Model\SerialNumbers serialNumbersGet($limit, $page, $position_id, $document_id, $in_use)

Fetch a list of serial numbers for positions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SerialNumberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Limited the result. Default is 100. Maximum can be 1000.
$page = 56; // int | Set current Page. Default is 1.
$position_id = "position_id_example"; // string | Filter serial numbers by position id.
$document_id = "document_id_example"; // string | Filter serial numbers by document id.
$in_use = true; // bool | Filter serial numbers by usage.

try {
    $result = $apiInstance->serialNumbersGet($limit, $page, $position_id, $document_id, $in_use);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SerialNumberApi->serialNumbersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Limited the result. Default is 100. Maximum can be 1000. | [optional]
 **page** | **int**| Set current Page. Default is 1. | [optional]
 **position_id** | **string**| Filter serial numbers by position id. | [optional]
 **document_id** | **string**| Filter serial numbers by document id. | [optional]
 **in_use** | **bool**| Filter serial numbers by usage. | [optional]

### Return type

[**\Swagger\Client\Model\SerialNumbers**](../Model/SerialNumbers.md)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serialNumbersIdDelete**
> serialNumbersIdDelete($id)

Delete a serial number for a position

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SerialNumberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | ID of the serial number that needs to be deleted

try {
    $apiInstance->serialNumbersIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling SerialNumberApi->serialNumbersIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of the serial number that needs to be deleted |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serialNumbersIdGet**
> \Swagger\Client\Model\SerialNumber serialNumbersIdGet($id)

Fetch a serial number for a position

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SerialNumberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | ID of the serial number that needs to be fetched

try {
    $result = $apiInstance->serialNumbersIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SerialNumberApi->serialNumbersIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of the serial number that needs to be fetched |

### Return type

[**\Swagger\Client\Model\SerialNumber**](../Model/SerialNumber.md)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serialNumbersPost**
> \Swagger\Client\Model\SerialNumber serialNumbersPost($body)

Create s serial number for a position

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SerialNumberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\SerialNumber(); // \Swagger\Client\Model\SerialNumber | 

try {
    $result = $apiInstance->serialNumbersPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SerialNumberApi->serialNumbersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SerialNumber**](../Model/SerialNumber.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\SerialNumber**](../Model/SerialNumber.md)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

