# Swagger\Client\DiscountApi

All URIs are relative to *https://api.easybill.de/rest/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**discountsPositionGet**](DiscountApi.md#discountspositionget) | **GET** /discounts/position | Fetch list of position discounts
[**discountsPositionGroupGet**](DiscountApi.md#discountspositiongroupget) | **GET** /discounts/position-group | Fetch list of position-group discounts
[**discountsPositionGroupIdDelete**](DiscountApi.md#discountspositiongroupiddelete) | **DELETE** /discounts/position-group/{id} | Delete the specified position-group discount
[**discountsPositionGroupIdGet**](DiscountApi.md#discountspositiongroupidget) | **GET** /discounts/position-group/{id} | Fetch specified position-group discount by id
[**discountsPositionGroupIdPut**](DiscountApi.md#discountspositiongroupidput) | **PUT** /discounts/position-group/{id} | Update a position-group discount
[**discountsPositionGroupPost**](DiscountApi.md#discountspositiongrouppost) | **POST** /discounts/position-group | Create a new position-group discount
[**discountsPositionIdDelete**](DiscountApi.md#discountspositioniddelete) | **DELETE** /discounts/position/{id} | Delete the specified position discount
[**discountsPositionIdGet**](DiscountApi.md#discountspositionidget) | **GET** /discounts/position/{id} | Fetch specified position discount by id
[**discountsPositionIdPut**](DiscountApi.md#discountspositionidput) | **PUT** /discounts/position/{id} | Update a position discount
[**discountsPositionPost**](DiscountApi.md#discountspositionpost) | **POST** /discounts/position | Create a new position discount

# **discountsPositionGet**
> \Swagger\Client\Model\DiscountPositions discountsPositionGet($limit, $page, $customer_id)

Fetch list of position discounts

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


$apiInstance = new Swagger\Client\Api\DiscountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Limited the result. Default is 100. Maximum can be 1000.
$page = 56; // int | Set current Page. Default is 1.
$customer_id = "customer_id_example"; // string | Filter discounts by customer_id. You can add multiple customer_ids separate by comma like id,id,id.

try {
    $result = $apiInstance->discountsPositionGet($limit, $page, $customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscountApi->discountsPositionGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Limited the result. Default is 100. Maximum can be 1000. | [optional]
 **page** | **int**| Set current Page. Default is 1. | [optional]
 **customer_id** | **string**| Filter discounts by customer_id. You can add multiple customer_ids separate by comma like id,id,id. | [optional]

### Return type

[**\Swagger\Client\Model\DiscountPositions**](../Model/DiscountPositions.md)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **discountsPositionGroupGet**
> \Swagger\Client\Model\DiscountPositionGroups discountsPositionGroupGet($limit, $page, $customer_id)

Fetch list of position-group discounts

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


$apiInstance = new Swagger\Client\Api\DiscountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Limited the result. Default is 100. Maximum can be 1000.
$page = 56; // int | Set current Page. Default is 1.
$customer_id = "customer_id_example"; // string | Filter discounts by customer_id. You can add multiple customer_ids separate by comma like id,id,id.

try {
    $result = $apiInstance->discountsPositionGroupGet($limit, $page, $customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscountApi->discountsPositionGroupGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Limited the result. Default is 100. Maximum can be 1000. | [optional]
 **page** | **int**| Set current Page. Default is 1. | [optional]
 **customer_id** | **string**| Filter discounts by customer_id. You can add multiple customer_ids separate by comma like id,id,id. | [optional]

### Return type

[**\Swagger\Client\Model\DiscountPositionGroups**](../Model/DiscountPositionGroups.md)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **discountsPositionGroupIdDelete**
> discountsPositionGroupIdDelete($id)

Delete the specified position-group discount

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


$apiInstance = new Swagger\Client\Api\DiscountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | ID of the to be soon deleted discount

try {
    $apiInstance->discountsPositionGroupIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling DiscountApi->discountsPositionGroupIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of the to be soon deleted discount |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **discountsPositionGroupIdGet**
> \Swagger\Client\Model\DiscountPositionGroup discountsPositionGroupIdGet($id, $limit, $page)

Fetch specified position-group discount by id

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


$apiInstance = new Swagger\Client\Api\DiscountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | ID of the discount
$limit = 56; // int | Limited the result. Default is 100. Maximum can be 1000.
$page = 56; // int | Set current Page. Default is 1.

try {
    $result = $apiInstance->discountsPositionGroupIdGet($id, $limit, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscountApi->discountsPositionGroupIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of the discount |
 **limit** | **int**| Limited the result. Default is 100. Maximum can be 1000. | [optional]
 **page** | **int**| Set current Page. Default is 1. | [optional]

### Return type

[**\Swagger\Client\Model\DiscountPositionGroup**](../Model/DiscountPositionGroup.md)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **discountsPositionGroupIdPut**
> \Swagger\Client\Model\DiscountPositionGroup discountsPositionGroupIdPut($id, $body)

Update a position-group discount

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


$apiInstance = new Swagger\Client\Api\DiscountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | ID of the to be soon updated discount
$body = new \Swagger\Client\Model\DiscountPositionGroup(); // \Swagger\Client\Model\DiscountPositionGroup | 

try {
    $result = $apiInstance->discountsPositionGroupIdPut($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscountApi->discountsPositionGroupIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of the to be soon updated discount |
 **body** | [**\Swagger\Client\Model\DiscountPositionGroup**](../Model/DiscountPositionGroup.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\DiscountPositionGroup**](../Model/DiscountPositionGroup.md)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **discountsPositionGroupPost**
> \Swagger\Client\Model\DiscountPositionGroup discountsPositionGroupPost($body)

Create a new position-group discount

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


$apiInstance = new Swagger\Client\Api\DiscountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\DiscountPositionGroup(); // \Swagger\Client\Model\DiscountPositionGroup | 

try {
    $result = $apiInstance->discountsPositionGroupPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscountApi->discountsPositionGroupPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DiscountPositionGroup**](../Model/DiscountPositionGroup.md)|  |

### Return type

[**\Swagger\Client\Model\DiscountPositionGroup**](../Model/DiscountPositionGroup.md)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **discountsPositionIdDelete**
> discountsPositionIdDelete($id)

Delete the specified position discount

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


$apiInstance = new Swagger\Client\Api\DiscountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | ID of the to be soon deleted discount

try {
    $apiInstance->discountsPositionIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling DiscountApi->discountsPositionIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of the to be soon deleted discount |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **discountsPositionIdGet**
> \Swagger\Client\Model\DiscountPosition discountsPositionIdGet($id, $limit, $page)

Fetch specified position discount by id

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


$apiInstance = new Swagger\Client\Api\DiscountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | ID of the discount
$limit = 56; // int | Limited the result. Default is 100. Maximum can be 1000.
$page = 56; // int | Set current Page. Default is 1.

try {
    $result = $apiInstance->discountsPositionIdGet($id, $limit, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscountApi->discountsPositionIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of the discount |
 **limit** | **int**| Limited the result. Default is 100. Maximum can be 1000. | [optional]
 **page** | **int**| Set current Page. Default is 1. | [optional]

### Return type

[**\Swagger\Client\Model\DiscountPosition**](../Model/DiscountPosition.md)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **discountsPositionIdPut**
> \Swagger\Client\Model\DiscountPosition discountsPositionIdPut($id, $body)

Update a position discount

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


$apiInstance = new Swagger\Client\Api\DiscountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | ID of the to be soon updated discount
$body = new \Swagger\Client\Model\DiscountPosition(); // \Swagger\Client\Model\DiscountPosition | 

try {
    $result = $apiInstance->discountsPositionIdPut($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscountApi->discountsPositionIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of the to be soon updated discount |
 **body** | [**\Swagger\Client\Model\DiscountPosition**](../Model/DiscountPosition.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\DiscountPosition**](../Model/DiscountPosition.md)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **discountsPositionPost**
> \Swagger\Client\Model\DiscountPosition discountsPositionPost($body)

Create a new position discount

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


$apiInstance = new Swagger\Client\Api\DiscountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\DiscountPosition(); // \Swagger\Client\Model\DiscountPosition | 

try {
    $result = $apiInstance->discountsPositionPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscountApi->discountsPositionPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DiscountPosition**](../Model/DiscountPosition.md)|  |

### Return type

[**\Swagger\Client\Model\DiscountPosition**](../Model/DiscountPosition.md)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

