# Swagger\Client\TimeTrackingApi

All URIs are relative to *https://api.easybill.de/rest/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**timeTrackingsGet**](TimeTrackingApi.md#timeTrackingsGet) | **GET** /time-trackings | Fetch time trackings list
[**timeTrackingsIdDelete**](TimeTrackingApi.md#timeTrackingsIdDelete) | **DELETE** /time-trackings/{id} | Delete time tracking
[**timeTrackingsIdGet**](TimeTrackingApi.md#timeTrackingsIdGet) | **GET** /time-trackings/{id} | Fetch time tracking
[**timeTrackingsIdPut**](TimeTrackingApi.md#timeTrackingsIdPut) | **PUT** /time-trackings/{id} | Update time tracking
[**timeTrackingsPost**](TimeTrackingApi.md#timeTrackingsPost) | **POST** /time-trackings | Create time tracking


# **timeTrackingsGet**
> \Swagger\Client\Model\TimeTrackings timeTrackingsGet($limit, $login_id, $project_id)

Fetch time trackings list

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

$api_instance = new Swagger\Client\Api\TimeTrackingApi();
$limit = 56; // int | Limited the result. Default is 100. Maximum can be 1000.
$login_id = "login_id_example"; // string | Filter time-tracking by login_id. You can add multiple ids separate by comma like id,id,id.
$project_id = "project_id_example"; // string | Filter time-tracking by project_id. You can add multiple ids separate by comma like id,id,id.

try {
    $result = $api_instance->timeTrackingsGet($limit, $login_id, $project_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeTrackingApi->timeTrackingsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Limited the result. Default is 100. Maximum can be 1000. | [optional]
 **login_id** | **string**| Filter time-tracking by login_id. You can add multiple ids separate by comma like id,id,id. | [optional]
 **project_id** | **string**| Filter time-tracking by project_id. You can add multiple ids separate by comma like id,id,id. | [optional]

### Return type

[**\Swagger\Client\Model\TimeTrackings**](../Model/TimeTrackings.md)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **timeTrackingsIdDelete**
> timeTrackingsIdDelete($id)

Delete time tracking

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

$api_instance = new Swagger\Client\Api\TimeTrackingApi();
$id = 789; // int | ID of time tracking

try {
    $api_instance->timeTrackingsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling TimeTrackingApi->timeTrackingsIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of time tracking |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **timeTrackingsIdGet**
> \Swagger\Client\Model\TimeTracking timeTrackingsIdGet($id)

Fetch time tracking

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

$api_instance = new Swagger\Client\Api\TimeTrackingApi();
$id = 789; // int | ID of time tracking

try {
    $result = $api_instance->timeTrackingsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeTrackingApi->timeTrackingsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of time tracking |

### Return type

[**\Swagger\Client\Model\TimeTracking**](../Model/TimeTracking.md)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **timeTrackingsIdPut**
> \Swagger\Client\Model\TimeTracking timeTrackingsIdPut($id, $body)

Update time tracking

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

$api_instance = new Swagger\Client\Api\TimeTrackingApi();
$id = 789; // int | ID of time tracking
$body = new \Swagger\Client\Model\TimeTracking(); // \Swagger\Client\Model\TimeTracking | 

try {
    $result = $api_instance->timeTrackingsIdPut($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeTrackingApi->timeTrackingsIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of time tracking |
 **body** | [**\Swagger\Client\Model\TimeTracking**](../Model/\Swagger\Client\Model\TimeTracking.md)|  |

### Return type

[**\Swagger\Client\Model\TimeTracking**](../Model/TimeTracking.md)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **timeTrackingsPost**
> \Swagger\Client\Model\TimeTracking timeTrackingsPost($body)

Create time tracking

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

$api_instance = new Swagger\Client\Api\TimeTrackingApi();
$body = new \Swagger\Client\Model\TimeTracking(); // \Swagger\Client\Model\TimeTracking | 

try {
    $result = $api_instance->timeTrackingsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeTrackingApi->timeTrackingsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\TimeTracking**](../Model/\Swagger\Client\Model\TimeTracking.md)|  |

### Return type

[**\Swagger\Client\Model\TimeTracking**](../Model/TimeTracking.md)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

