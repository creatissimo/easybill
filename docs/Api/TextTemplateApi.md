# Swagger\Client\TextTemplateApi

All URIs are relative to *https://api.easybill.de/rest/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**textTemplatesGet**](TextTemplateApi.md#textTemplatesGet) | **GET** /text-templates | Fetch text templates list
[**textTemplatesIdDelete**](TextTemplateApi.md#textTemplatesIdDelete) | **DELETE** /text-templates/{id} | Delete text template
[**textTemplatesIdGet**](TextTemplateApi.md#textTemplatesIdGet) | **GET** /text-templates/{id} | Fetch text template
[**textTemplatesIdPut**](TextTemplateApi.md#textTemplatesIdPut) | **PUT** /text-templates/{id} | Update text template
[**textTemplatesPost**](TextTemplateApi.md#textTemplatesPost) | **POST** /text-templates | Create text template


# **textTemplatesGet**
> \Swagger\Client\Model\TextTemplates textTemplatesGet($limit)

Fetch text templates list

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

$api_instance = new Swagger\Client\Api\TextTemplateApi();
$limit = 56; // int | Limited the result. Default is 100. Maximum can be 1000.

try {
    $result = $api_instance->textTemplatesGet($limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextTemplateApi->textTemplatesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Limited the result. Default is 100. Maximum can be 1000. | [optional]

### Return type

[**\Swagger\Client\Model\TextTemplates**](../Model/TextTemplates.md)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **textTemplatesIdDelete**
> textTemplatesIdDelete($id)

Delete text template

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

$api_instance = new Swagger\Client\Api\TextTemplateApi();
$id = 789; // int | ID of text template

try {
    $api_instance->textTemplatesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling TextTemplateApi->textTemplatesIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of text template |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **textTemplatesIdGet**
> \Swagger\Client\Model\TextTemplate textTemplatesIdGet($id)

Fetch text template

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

$api_instance = new Swagger\Client\Api\TextTemplateApi();
$id = 789; // int | ID of text template

try {
    $result = $api_instance->textTemplatesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextTemplateApi->textTemplatesIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of text template |

### Return type

[**\Swagger\Client\Model\TextTemplate**](../Model/TextTemplate.md)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **textTemplatesIdPut**
> \Swagger\Client\Model\TextTemplate textTemplatesIdPut($id, $body)

Update text template

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

$api_instance = new Swagger\Client\Api\TextTemplateApi();
$id = 789; // int | ID of text template
$body = new \Swagger\Client\Model\TextTemplate(); // \Swagger\Client\Model\TextTemplate | 

try {
    $result = $api_instance->textTemplatesIdPut($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextTemplateApi->textTemplatesIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of text template |
 **body** | [**\Swagger\Client\Model\TextTemplate**](../Model/\Swagger\Client\Model\TextTemplate.md)|  |

### Return type

[**\Swagger\Client\Model\TextTemplate**](../Model/TextTemplate.md)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **textTemplatesPost**
> \Swagger\Client\Model\TextTemplate textTemplatesPost($body)

Create text template

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

$api_instance = new Swagger\Client\Api\TextTemplateApi();
$body = new \Swagger\Client\Model\TextTemplate(); // \Swagger\Client\Model\TextTemplate | 

try {
    $result = $api_instance->textTemplatesPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextTemplateApi->textTemplatesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\TextTemplate**](../Model/\Swagger\Client\Model\TextTemplate.md)|  |

### Return type

[**\Swagger\Client\Model\TextTemplate**](../Model/TextTemplate.md)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

