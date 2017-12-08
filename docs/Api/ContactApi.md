# Swagger\Client\ContactApi

All URIs are relative to *https://api.easybill.de/rest/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**customersCustomerIdContactsGet**](ContactApi.md#customersCustomerIdContactsGet) | **GET** /customers/{customerId}/contacts | Fetch customer contact list
[**customersCustomerIdContactsIdDelete**](ContactApi.md#customersCustomerIdContactsIdDelete) | **DELETE** /customers/{customerId}/contacts/{id} | Delete contact
[**customersCustomerIdContactsIdGet**](ContactApi.md#customersCustomerIdContactsIdGet) | **GET** /customers/{customerId}/contacts/{id} | Fetch contact
[**customersCustomerIdContactsIdPut**](ContactApi.md#customersCustomerIdContactsIdPut) | **PUT** /customers/{customerId}/contacts/{id} | Update Contact
[**customersCustomerIdContactsPost**](ContactApi.md#customersCustomerIdContactsPost) | **POST** /customers/{customerId}/contacts | Create new contact


# **customersCustomerIdContactsGet**
> \Swagger\Client\Model\Contacts customersCustomerIdContactsGet($customer_id, $limit)

Fetch customer contact list

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

$api_instance = new Swagger\Client\Api\ContactApi();
$customer_id = 789; // int | ID of customer that needs to be fetched
$limit = 56; // int | Limited the result. Default is 100. Maximum can be 1000.

try {
    $result = $api_instance->customersCustomerIdContactsGet($customer_id, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->customersCustomerIdContactsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**| ID of customer that needs to be fetched |
 **limit** | **int**| Limited the result. Default is 100. Maximum can be 1000. | [optional]

### Return type

[**\Swagger\Client\Model\Contacts**](../Model/Contacts.md)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersCustomerIdContactsIdDelete**
> customersCustomerIdContactsIdDelete($customer_id, $id)

Delete contact



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

$api_instance = new Swagger\Client\Api\ContactApi();
$customer_id = 789; // int | ID of customer
$id = 789; // int | ID of contact

try {
    $api_instance->customersCustomerIdContactsIdDelete($customer_id, $id);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->customersCustomerIdContactsIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**| ID of customer |
 **id** | **int**| ID of contact |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersCustomerIdContactsIdGet**
> \Swagger\Client\Model\Contact customersCustomerIdContactsIdGet($customer_id, $id)

Fetch contact

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

$api_instance = new Swagger\Client\Api\ContactApi();
$customer_id = 789; // int | ID of customer
$id = 789; // int | ID of contact

try {
    $result = $api_instance->customersCustomerIdContactsIdGet($customer_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->customersCustomerIdContactsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**| ID of customer |
 **id** | **int**| ID of contact |

### Return type

[**\Swagger\Client\Model\Contact**](../Model/Contact.md)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersCustomerIdContactsIdPut**
> \Swagger\Client\Model\Contact customersCustomerIdContactsIdPut($customer_id, $id, $body)

Update Contact

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

$api_instance = new Swagger\Client\Api\ContactApi();
$customer_id = 789; // int | ID of customer
$id = 789; // int | ID of contact
$body = new \Swagger\Client\Model\Contact(); // \Swagger\Client\Model\Contact | 

try {
    $result = $api_instance->customersCustomerIdContactsIdPut($customer_id, $id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->customersCustomerIdContactsIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**| ID of customer |
 **id** | **int**| ID of contact |
 **body** | [**\Swagger\Client\Model\Contact**](../Model/Contact.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Contact**](../Model/Contact.md)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersCustomerIdContactsPost**
> \Swagger\Client\Model\Contact customersCustomerIdContactsPost($customer_id, $body)

Create new contact

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

$api_instance = new Swagger\Client\Api\ContactApi();
$customer_id = 789; // int | ID of customer
$body = new \Swagger\Client\Model\Contact(); // \Swagger\Client\Model\Contact | 

try {
    $result = $api_instance->customersCustomerIdContactsPost($customer_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->customersCustomerIdContactsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**| ID of customer |
 **body** | [**\Swagger\Client\Model\Contact**](../Model/Contact.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Contact**](../Model/Contact.md)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

