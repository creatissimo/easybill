# Swagger\Client\PostBoxApi

All URIs are relative to *https://api.easybill.de/rest/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**postBoxesGet**](PostBoxApi.md#postBoxesGet) | **GET** /post-boxes | Fetch post box list
[**postBoxesIdDelete**](PostBoxApi.md#postBoxesIdDelete) | **DELETE** /post-boxes/{id} | Delete post box
[**postBoxesIdGet**](PostBoxApi.md#postBoxesIdGet) | **GET** /post-boxes/{id} | Fetch post box


# **postBoxesGet**
> \Swagger\Client\Model\PostBoxes postBoxesGet($limit, $type, $status, $document_id)

Fetch post box list

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

$api_instance = new Swagger\Client\Api\PostBoxApi();
$limit = 56; // int | Limited the result. Default is 100. Maximum can be 1000.
$type = "type_example"; // string | Filter post boxes by type. Multiple typs seperate with , like type=EMAIL,FAX.
$status = "status_example"; // string | Filter post boxes by status.
$document_id = "document_id_example"; // string | Filter post boxes by document_id. You can add multiple document ids separate by comma like id,id,id.

try {
    $result = $api_instance->postBoxesGet($limit, $type, $status, $document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostBoxApi->postBoxesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Limited the result. Default is 100. Maximum can be 1000. | [optional]
 **type** | **string**| Filter post boxes by type. Multiple typs seperate with , like type&#x3D;EMAIL,FAX. | [optional]
 **status** | **string**| Filter post boxes by status. | [optional]
 **document_id** | **string**| Filter post boxes by document_id. You can add multiple document ids separate by comma like id,id,id. | [optional]

### Return type

[**\Swagger\Client\Model\PostBoxes**](../Model/PostBoxes.md)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postBoxesIdDelete**
> postBoxesIdDelete($id)

Delete post box

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

$api_instance = new Swagger\Client\Api\PostBoxApi();
$id = 789; // int | ID of post box

try {
    $api_instance->postBoxesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling PostBoxApi->postBoxesIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of post box |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postBoxesIdGet**
> \Swagger\Client\Model\PostBox postBoxesIdGet($id)

Fetch post box

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

$api_instance = new Swagger\Client\Api\PostBoxApi();
$id = 789; // int | ID of post box

try {
    $result = $api_instance->postBoxesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostBoxApi->postBoxesIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of post box |

### Return type

[**\Swagger\Client\Model\PostBox**](../Model/PostBox.md)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

