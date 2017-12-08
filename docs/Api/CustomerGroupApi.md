# Swagger\Client\CustomerGroupApi

All URIs are relative to *https://api.easybill.de/rest/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**customerGroupsGet**](CustomerGroupApi.md#customerGroupsGet) | **GET** /customer-groups | Fetch customer group list
[**customerGroupsIdDelete**](CustomerGroupApi.md#customerGroupsIdDelete) | **DELETE** /customer-groups/{id} | Delete customer group
[**customerGroupsIdGet**](CustomerGroupApi.md#customerGroupsIdGet) | **GET** /customer-groups/{id} | Fetch customer group
[**customerGroupsIdPut**](CustomerGroupApi.md#customerGroupsIdPut) | **PUT** /customer-groups/{id} | Update customer group
[**customerGroupsPost**](CustomerGroupApi.md#customerGroupsPost) | **POST** /customer-groups | Create customer froup


# **customerGroupsGet**
> \Swagger\Client\Model\CustomerGroups customerGroupsGet($limit)

Fetch customer group list

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

$api_instance = new Swagger\Client\Api\CustomerGroupApi();
$limit = 56; // int | Limited the result. Default is 100. Maximum can be 1000.

try {
    $result = $api_instance->customerGroupsGet($limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerGroupApi->customerGroupsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Limited the result. Default is 100. Maximum can be 1000. | [optional]

### Return type

[**\Swagger\Client\Model\CustomerGroups**](../Model/CustomerGroups.md)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerGroupsIdDelete**
> customerGroupsIdDelete($id)

Delete customer group

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

$api_instance = new Swagger\Client\Api\CustomerGroupApi();
$id = 789; // int | ID of customer group

try {
    $api_instance->customerGroupsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling CustomerGroupApi->customerGroupsIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of customer group |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerGroupsIdGet**
> \Swagger\Client\Model\CustomerGroup customerGroupsIdGet($id)

Fetch customer group

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

$api_instance = new Swagger\Client\Api\CustomerGroupApi();
$id = 789; // int | ID of customer group

try {
    $result = $api_instance->customerGroupsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerGroupApi->customerGroupsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of customer group |

### Return type

[**\Swagger\Client\Model\CustomerGroup**](../Model/CustomerGroup.md)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerGroupsIdPut**
> \Swagger\Client\Model\CustomerGroup customerGroupsIdPut($id, $body)

Update customer group

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

$api_instance = new Swagger\Client\Api\CustomerGroupApi();
$id = 789; // int | ID of customer goup
$body = new \Swagger\Client\Model\CustomerGroup(); // \Swagger\Client\Model\CustomerGroup | 

try {
    $result = $api_instance->customerGroupsIdPut($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerGroupApi->customerGroupsIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of customer goup |
 **body** | [**\Swagger\Client\Model\CustomerGroup**](../Model/CustomerGroup.md)|  |

### Return type

[**\Swagger\Client\Model\CustomerGroup**](../Model/CustomerGroup.md)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerGroupsPost**
> \Swagger\Client\Model\CustomerGroup customerGroupsPost($body)

Create customer froup

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

$api_instance = new Swagger\Client\Api\CustomerGroupApi();
$body = new \Swagger\Client\Model\CustomerGroup(); // \Swagger\Client\Model\CustomerGroup | 

try {
    $result = $api_instance->customerGroupsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerGroupApi->customerGroupsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CustomerGroup**](../Model/CustomerGroup.md)|  |

### Return type

[**\Swagger\Client\Model\CustomerGroup**](../Model/CustomerGroup.md)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

