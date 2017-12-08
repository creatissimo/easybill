# Swagger\Client\PositionGroupApi

All URIs are relative to *https://api.easybill.de/rest/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**positionGroupsGet**](PositionGroupApi.md#positionGroupsGet) | **GET** /position-groups | Fetch position group list
[**positionGroupsIdDelete**](PositionGroupApi.md#positionGroupsIdDelete) | **DELETE** /position-groups/{id} | Delete position group
[**positionGroupsIdGet**](PositionGroupApi.md#positionGroupsIdGet) | **GET** /position-groups/{id} | Fetch position group
[**positionGroupsIdPut**](PositionGroupApi.md#positionGroupsIdPut) | **PUT** /position-groups/{id} | Update position group
[**positionGroupsPost**](PositionGroupApi.md#positionGroupsPost) | **POST** /position-groups | Create position group


# **positionGroupsGet**
> \Swagger\Client\Model\PositionGroups positionGroupsGet($limit)

Fetch position group list

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

$api_instance = new Swagger\Client\Api\PositionGroupApi();
$limit = 56; // int | Limited the result. Default is 100. Maximum can be 1000.

try {
    $result = $api_instance->positionGroupsGet($limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PositionGroupApi->positionGroupsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Limited the result. Default is 100. Maximum can be 1000. | [optional]

### Return type

[**\Swagger\Client\Model\PositionGroups**](../Model/PositionGroups.md)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **positionGroupsIdDelete**
> positionGroupsIdDelete($id)

Delete position group

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

$api_instance = new Swagger\Client\Api\PositionGroupApi();
$id = 789; // int | ID of position group

try {
    $api_instance->positionGroupsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling PositionGroupApi->positionGroupsIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of position group |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **positionGroupsIdGet**
> \Swagger\Client\Model\PositionGroup positionGroupsIdGet($id)

Fetch position group

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

$api_instance = new Swagger\Client\Api\PositionGroupApi();
$id = 789; // int | ID of position group

try {
    $result = $api_instance->positionGroupsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PositionGroupApi->positionGroupsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of position group |

### Return type

[**\Swagger\Client\Model\PositionGroup**](../Model/PositionGroup.md)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **positionGroupsIdPut**
> \Swagger\Client\Model\PositionGroup positionGroupsIdPut($id, $body)

Update position group

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

$api_instance = new Swagger\Client\Api\PositionGroupApi();
$id = 789; // int | ID of position goup
$body = new \Swagger\Client\Model\PositionGroup(); // \Swagger\Client\Model\PositionGroup | 

try {
    $result = $api_instance->positionGroupsIdPut($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PositionGroupApi->positionGroupsIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of position goup |
 **body** | [**\Swagger\Client\Model\PositionGroup**](../Model/PositionGroup.md)|  |

### Return type

[**\Swagger\Client\Model\PositionGroup**](../Model/PositionGroup.md)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **positionGroupsPost**
> \Swagger\Client\Model\PositionGroup positionGroupsPost($body)

Create position group

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

$api_instance = new Swagger\Client\Api\PositionGroupApi();
$body = new \Swagger\Client\Model\PositionGroup(); // \Swagger\Client\Model\PositionGroup | 

try {
    $result = $api_instance->positionGroupsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PositionGroupApi->positionGroupsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\PositionGroup**](../Model/PositionGroup.md)|  |

### Return type

[**\Swagger\Client\Model\PositionGroup**](../Model/PositionGroup.md)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

