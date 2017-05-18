# Swagger\Client\PositionApi

All URIs are relative to *https://api.easybill.de/rest/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**positionsGet**](PositionApi.md#positionsGet) | **GET** /positions | Fetch positions list
[**positionsIdDelete**](PositionApi.md#positionsIdDelete) | **DELETE** /positions/{id} | Delete position
[**positionsIdGet**](PositionApi.md#positionsIdGet) | **GET** /positions/{id} | Fetch position
[**positionsIdPut**](PositionApi.md#positionsIdPut) | **PUT** /positions/{id} | Update position
[**positionsPost**](PositionApi.md#positionsPost) | **POST** /positions | Create position


# **positionsGet**
> \Swagger\Client\Model\Positions positionsGet($limit, $type, $number)

Fetch positions list

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

$api_instance = new Swagger\Client\Api\PositionApi();
$limit = 56; // int | Limited the result. Default is 100. Maximum can be 1000.
$type = "type_example"; // string | Filter positions by type.
$number = "number_example"; // string | Filter positions by number. You can add multiple numbers separate by comma like no,no,no.

try {
    $result = $api_instance->positionsGet($limit, $type, $number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PositionApi->positionsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Limited the result. Default is 100. Maximum can be 1000. | [optional]
 **type** | **string**| Filter positions by type. | [optional]
 **number** | **string**| Filter positions by number. You can add multiple numbers separate by comma like no,no,no. | [optional]

### Return type

[**\Swagger\Client\Model\Positions**](../Model/Positions.md)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **positionsIdDelete**
> positionsIdDelete($id)

Delete position

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

$api_instance = new Swagger\Client\Api\PositionApi();
$id = 789; // int | ID of position

try {
    $api_instance->positionsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling PositionApi->positionsIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of position |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **positionsIdGet**
> \Swagger\Client\Model\Position positionsIdGet($id)

Fetch position

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

$api_instance = new Swagger\Client\Api\PositionApi();
$id = 789; // int | ID of position

try {
    $result = $api_instance->positionsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PositionApi->positionsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of position |

### Return type

[**\Swagger\Client\Model\Position**](../Model/Position.md)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **positionsIdPut**
> \Swagger\Client\Model\Position positionsIdPut($id, $body)

Update position

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

$api_instance = new Swagger\Client\Api\PositionApi();
$id = 789; // int | ID of position
$body = new \Swagger\Client\Model\Position(); // \Swagger\Client\Model\Position | 

try {
    $result = $api_instance->positionsIdPut($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PositionApi->positionsIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of position |
 **body** | [**\Swagger\Client\Model\Position**](../Model/\Swagger\Client\Model\Position.md)|  |

### Return type

[**\Swagger\Client\Model\Position**](../Model/Position.md)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **positionsPost**
> \Swagger\Client\Model\Position positionsPost($body)

Create position

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

$api_instance = new Swagger\Client\Api\PositionApi();
$body = new \Swagger\Client\Model\Position(); // \Swagger\Client\Model\Position | 

try {
    $result = $api_instance->positionsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PositionApi->positionsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Position**](../Model/\Swagger\Client\Model\Position.md)|  |

### Return type

[**\Swagger\Client\Model\Position**](../Model/Position.md)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

