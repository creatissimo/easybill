<?php
/**
 * DocumentTest
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
 * The first version of the easybill REST API. [CHANGELOG](https://api.easybill.de/rest/v1/CHANGELOG.md)  ## Authentication  You can choose between two available methods: `Basic Auth` or `Bearer Token`.  In each HTTP request, one of the following HTTP headers is required:  ``` # Basic Auth Authorization: Basic base64_encode('<email>:<api_key>') # Bearer Token Authorization: Bearer <api_key> ```  ## Limitations  ### Request Limit  * PLUS: 10 requests per minute * BUSINESS: 60 requests per minute  If the limit is exceeded, you will receive the HTTP error: `429 Too Many Requests`  ### Result Limit  All result lists are limited to 100 by default. This limit can be increased by the query parameter `limit` to a maximum of 1000.  ## Query filter  Many list resources can be filtered. In `/documents` you can filter e.g. by number with `/documents?number=111028654`. If you want to filter multiple numbers, you can either enter them separated by commas `/documents?number=111028654,222006895` or as an array  `/documents?number[]=111028654&number[]=222006895`.  **Warning**: The maximum size of an HTTP request line in bytes is 4094. If this limit is exceeded, you will receive the HTTP error: `414 Request-URI Too Large`  ### Escape commas in query  You can escape commans in query `name=Patrick\\, Peter` if you submit the header `X-Easybill-Escape: true` in your request.  ## Property login_id  This is the login of your admin or employee account.  ## Date and Date-Time format  Please use the timezone `Europe/Berlin`.  * **date** = *Y-m-d* = `2016-12-31` * **date-time** = *Y-m-d H:i:s* = `2016-12-31 03:13:37`  Date or datetime can be `null` because the attributes have been added later and the entry is older.
 *
 * OpenAPI spec version: 1.19.0
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
 * DocumentTest Class Doc Comment
 *
 * @category    Class */
// * @description Document
/**
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class DocumentTest extends \PHPUnit_Framework_TestCase
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
     * Test "Document"
     */
    public function testDocument()
    {
    }

    /**
     * Test attribute "address"
     */
    public function testPropertyAddress()
    {
    }

    /**
     * Test attribute "attachment_ids"
     */
    public function testPropertyAttachmentIds()
    {
    }

    /**
     * Test attribute "label_address"
     */
    public function testPropertyLabelAddress()
    {
    }

    /**
     * Test attribute "amount"
     */
    public function testPropertyAmount()
    {
    }

    /**
     * Test attribute "amount_net"
     */
    public function testPropertyAmountNet()
    {
    }

    /**
     * Test attribute "bank_debit_form"
     */
    public function testPropertyBankDebitForm()
    {
    }

    /**
     * Test attribute "billing_country"
     */
    public function testPropertyBillingCountry()
    {
    }

    /**
     * Test attribute "calc_vat_from"
     */
    public function testPropertyCalcVatFrom()
    {
    }

    /**
     * Test attribute "cancel_id"
     */
    public function testPropertyCancelId()
    {
    }

    /**
     * Test attribute "cash_allowance"
     */
    public function testPropertyCashAllowance()
    {
    }

    /**
     * Test attribute "cash_allowance_days"
     */
    public function testPropertyCashAllowanceDays()
    {
    }

    /**
     * Test attribute "cash_allowance_text"
     */
    public function testPropertyCashAllowanceText()
    {
    }

    /**
     * Test attribute "contact_id"
     */
    public function testPropertyContactId()
    {
    }

    /**
     * Test attribute "contact_label"
     */
    public function testPropertyContactLabel()
    {
    }

    /**
     * Test attribute "contact_text"
     */
    public function testPropertyContactText()
    {
    }

    /**
     * Test attribute "created_at"
     */
    public function testPropertyCreatedAt()
    {
    }

    /**
     * Test attribute "currency"
     */
    public function testPropertyCurrency()
    {
    }

    /**
     * Test attribute "customer_id"
     */
    public function testPropertyCustomerId()
    {
    }

    /**
     * Test attribute "discount"
     */
    public function testPropertyDiscount()
    {
    }

    /**
     * Test attribute "discount_type"
     */
    public function testPropertyDiscountType()
    {
    }

    /**
     * Test attribute "document_date"
     */
    public function testPropertyDocumentDate()
    {
    }

    /**
     * Test attribute "due_date"
     */
    public function testPropertyDueDate()
    {
    }

    /**
     * Test attribute "edited_at"
     */
    public function testPropertyEditedAt()
    {
    }

    /**
     * Test attribute "external_id"
     */
    public function testPropertyExternalId()
    {
    }

    /**
     * Test attribute "replica_url"
     */
    public function testPropertyReplicaUrl()
    {
    }

    /**
     * Test attribute "grace_period"
     */
    public function testPropertyGracePeriod()
    {
    }

    /**
     * Test attribute "id"
     */
    public function testPropertyId()
    {
    }

    /**
     * Test attribute "is_archive"
     */
    public function testPropertyIsArchive()
    {
    }

    /**
     * Test attribute "is_draft"
     */
    public function testPropertyIsDraft()
    {
    }

    /**
     * Test attribute "is_replica"
     */
    public function testPropertyIsReplica()
    {
    }

    /**
     * Test attribute "items"
     */
    public function testPropertyItems()
    {
    }

    /**
     * Test attribute "last_postbox_id"
     */
    public function testPropertyLastPostboxId()
    {
    }

    /**
     * Test attribute "login_id"
     */
    public function testPropertyLoginId()
    {
    }

    /**
     * Test attribute "number"
     */
    public function testPropertyNumber()
    {
    }

    /**
     * Test attribute "paid_amount"
     */
    public function testPropertyPaidAmount()
    {
    }

    /**
     * Test attribute "paid_at"
     */
    public function testPropertyPaidAt()
    {
    }

    /**
     * Test attribute "pdf_pages"
     */
    public function testPropertyPdfPages()
    {
    }

    /**
     * Test attribute "pdf_template"
     */
    public function testPropertyPdfTemplate()
    {
    }

    /**
     * Test attribute "project_id"
     */
    public function testPropertyProjectId()
    {
    }

    /**
     * Test attribute "recurring_options"
     */
    public function testPropertyRecurringOptions()
    {
    }

    /**
     * Test attribute "ref_id"
     */
    public function testPropertyRefId()
    {
    }

    /**
     * Test attribute "service_date"
     */
    public function testPropertyServiceDate()
    {
    }

    /**
     * Test attribute "shipping_country"
     */
    public function testPropertyShippingCountry()
    {
    }

    /**
     * Test attribute "status"
     */
    public function testPropertyStatus()
    {
    }

    /**
     * Test attribute "text"
     */
    public function testPropertyText()
    {
    }

    /**
     * Test attribute "text_prefix"
     */
    public function testPropertyTextPrefix()
    {
    }

    /**
     * Test attribute "title"
     */
    public function testPropertyTitle()
    {
    }

    /**
     * Test attribute "type"
     */
    public function testPropertyType()
    {
    }

    /**
     * Test attribute "use_shipping_address"
     */
    public function testPropertyUseShippingAddress()
    {
    }

    /**
     * Test attribute "vat_country"
     */
    public function testPropertyVatCountry()
    {
    }

    /**
     * Test attribute "vat_option"
     */
    public function testPropertyVatOption()
    {
    }
}
