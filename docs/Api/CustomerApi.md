# Swagger\Client\CustomerApi

All URIs are relative to *https://api.easybill.de/rest/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**customersGet**](CustomerApi.md#customersGet) | **GET** /customers | Fetch customers list
[**customersIdDelete**](CustomerApi.md#customersIdDelete) | **DELETE** /customers/{id} | Delete customer
[**customersIdGet**](CustomerApi.md#customersIdGet) | **GET** /customers/{id} | Fetch customer
[**customersIdPut**](CustomerApi.md#customersIdPut) | **PUT** /customers/{id} | Update Customer
[**customersPost**](CustomerApi.md#customersPost) | **POST** /customers | Create customer


# **customersGet**
> \Swagger\Client\Model\Customers customersGet($limit, $group_id, $number, $country, $zip_code, $emails, $first_name, $last_name, $company_name, $created_at)

Fetch customers list

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

$api_instance = new Swagger\Client\Api\CustomerApi();
$limit = 56; // int | Limited the result. Default is 100. Maximum can be 1000.
$group_id = "group_id_example"; // string | Filter customers by group_id. You can add multiple group ids separate by comma like id,id,id.
$number = "number_example"; // string | Filter customers by number. You can add multiple numbers separate by comma like no,no,no.
$country = "country_example"; // string | Filter customers by country. You can add multiple countries separate by comma like DE,PL,FR.
$zip_code = "zip_code_example"; // string | Filter customers by zip_code. You can add multiple zip codes separate by comma like zip,zip,zip.
$emails = "emails_example"; // string | Filter customers by emails. You can add multiple emails separate by comma like mail,mail,mail.
$first_name = "first_name_example"; // string | Filter customers by first_name. You can add multiple names separate by comma like name,name,name.
$last_name = "last_name_example"; // string | Filter customers by first_name. You can add multiple names separate by comma like name,name,name.
$company_name = "company_name_example"; // string | Filter customers by first_name. You can add multiple names separate by comma like name,name,name.
$created_at = "created_at_example"; // string | Filter customers by created_at. You can filter one date with created_at=2014-12-10 or between like 2015-01-01,2015-12-31.

try {
    $result = $api_instance->customersGet($limit, $group_id, $number, $country, $zip_code, $emails, $first_name, $last_name, $company_name, $created_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Limited the result. Default is 100. Maximum can be 1000. | [optional]
 **group_id** | **string**| Filter customers by group_id. You can add multiple group ids separate by comma like id,id,id. | [optional]
 **number** | **string**| Filter customers by number. You can add multiple numbers separate by comma like no,no,no. | [optional]
 **country** | **string**| Filter customers by country. You can add multiple countries separate by comma like DE,PL,FR. | [optional]
 **zip_code** | **string**| Filter customers by zip_code. You can add multiple zip codes separate by comma like zip,zip,zip. | [optional]
 **emails** | **string**| Filter customers by emails. You can add multiple emails separate by comma like mail,mail,mail. | [optional]
 **first_name** | **string**| Filter customers by first_name. You can add multiple names separate by comma like name,name,name. | [optional]
 **last_name** | **string**| Filter customers by first_name. You can add multiple names separate by comma like name,name,name. | [optional]
 **company_name** | **string**| Filter customers by first_name. You can add multiple names separate by comma like name,name,name. | [optional]
 **created_at** | **string**| Filter customers by created_at. You can filter one date with created_at&#x3D;2014-12-10 or between like 2015-01-01,2015-12-31. | [optional]

### Return type

[**\Swagger\Client\Model\Customers**](../Model/Customers.md)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdDelete**
> customersIdDelete($id)

Delete customer



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

$api_instance = new Swagger\Client\Api\CustomerApi();
$id = 789; // int | ID of customer that needs to be deleted

try {
    $api_instance->customersIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of customer that needs to be deleted |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdGet**
> \Swagger\Client\Model\Customer customersIdGet($id)

Fetch customer

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

$api_instance = new Swagger\Client\Api\CustomerApi();
$id = 789; // int | ID of customer that needs to be fetched

try {
    $result = $api_instance->customersIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of customer that needs to be fetched |

### Return type

[**\Swagger\Client\Model\Customer**](../Model/Customer.md)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersIdPut**
> \Swagger\Client\Model\Customer customersIdPut($id, $body)

Update Customer

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

$api_instance = new Swagger\Client\Api\CustomerApi();
$id = 789; // int | ID of customer that needs to be updated
$body = new \Swagger\Client\Model\Customer(); // \Swagger\Client\Model\Customer | 

try {
    $result = $api_instance->customersIdPut($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of customer that needs to be updated |
 **body** | [**\Swagger\Client\Model\Customer**](../Model/\Swagger\Client\Model\Customer.md)|  |

### Return type

[**\Swagger\Client\Model\Customer**](../Model/Customer.md)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersPost**
> \Swagger\Client\Model\Customer customersPost($body)

Create customer



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

$api_instance = new Swagger\Client\Api\CustomerApi();
$body = new \Swagger\Client\Model\Customer(); // \Swagger\Client\Model\Customer | 

try {
    $result = $api_instance->customersPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Customer**](../Model/\Swagger\Client\Model\Customer.md)|  |

### Return type

[**\Swagger\Client\Model\Customer**](../Model/Customer.md)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

