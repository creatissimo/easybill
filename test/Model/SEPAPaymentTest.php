<?php
/**
 * SEPAPaymentTest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * easybill REST API
 *
 * The first version of the easybill REST API. [CHANGELOG](https://api.easybill.de/rest/v1/CHANGELOG.md)  ## Authentication  You can choose between two available methods: `Basic Auth` or `Bearer Token`.  In each HTTP request, one of the following HTTP headers is required:  ``` # Basic Auth Authorization: Basic base64_encode('<email>:<api_key>') # Bearer Token Authorization: Bearer <api_key> ```  ## Limitations  ### Request Limit  * PLUS: 10 requests per minute * BUSINESS: 60 requests per minute  If the limit is exceeded, you will receive the HTTP error: `429 Too Many Requests`  ### Result Limit  All result lists are limited to 100 by default. This limit can be increased by the query parameter `limit` to a maximum of 1000.  ## Query filter  Many list resources can be filtered. In `/documents` you can filter e.g. by number with `/documents?number=111028654`. If you want to filter multiple numbers, you can either enter them separated by commas `/documents?number=111028654,222006895` or as an array  `/documents?number[]=111028654&number[]=222006895`.  **Warning**: The maximum size of an HTTP request line in bytes is 4094. If this limit is exceeded, you will receive the HTTP error: `414 Request-URI Too Large`  ### Escape commas in query  You can escape commans in query `name=Patrick\\, Peter` if you submit the header `X-Easybill-Escape: true` in your request.  ## Property login_id  This is the login of your admin or employee account.  ## Date and Date-Time format  * **date** = *Y-m-d* = `2016-12-31` * **date-time** = *Y-m-d H:i:s* = `2016-12-31 03:13:37`
 *
 * OpenAPI spec version: 1.12.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the model.
 */

namespace Swagger\Client;

/**
 * SEPAPaymentTest Class Doc Comment
 *
 * @category    Class */
// * @description SEPAPayment
/**
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SEPAPaymentTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass()
    {

    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {

    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {

    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {

    }

    /**
     * Test "SEPAPayment"
     */
    public function testSEPAPayment()
    {

    }

    /**
     * Test attribute "amount"
     */
    public function testPropertyAmount()
    {

    }

    /**
     * Test attribute "created_at"
     */
    public function testPropertyCreatedAt()
    {

    }

    /**
     * Test attribute "debitor_bic"
     */
    public function testPropertyDebitorBic()
    {

    }

    /**
     * Test attribute "debitor_iban"
     */
    public function testPropertyDebitorIban()
    {

    }

    /**
     * Test attribute "debitor_name"
     */
    public function testPropertyDebitorName()
    {

    }

    /**
     * Test attribute "document_id"
     */
    public function testPropertyDocumentId()
    {

    }

    /**
     * Test attribute "export_at"
     */
    public function testPropertyExportAt()
    {

    }

    /**
     * Test attribute "export_error"
     */
    public function testPropertyExportError()
    {

    }

    /**
     * Test attribute "id"
     */
    public function testPropertyId()
    {

    }

    /**
     * Test attribute "local_instrument"
     */
    public function testPropertyLocalInstrument()
    {

    }

    /**
     * Test attribute "mandate_date_of_signature"
     */
    public function testPropertyMandateDateOfSignature()
    {

    }

    /**
     * Test attribute "mandate_id"
     */
    public function testPropertyMandateId()
    {

    }

    /**
     * Test attribute "reference"
     */
    public function testPropertyReference()
    {

    }

    /**
     * Test attribute "remittance_information"
     */
    public function testPropertyRemittanceInformation()
    {

    }

    /**
     * Test attribute "requested_at"
     */
    public function testPropertyRequestedAt()
    {

    }

    /**
     * Test attribute "sequence_type"
     */
    public function testPropertySequenceType()
    {

    }

}
