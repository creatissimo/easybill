<?php
/**
 * Project
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
 * The first version of the easybill REST API. [CHANGELOG](https://api.easybill.de/rest/v1/CHANGELOG.md)  ## Authentication  You can choose between two available methods: `Basic Auth` or `Bearer Token`.  In each HTTP request, one of the following HTTP headers is required:  ``` # Basic Auth Authorization: Basic base64_encode('<email>:<api_key>') # Bearer Token Authorization: Bearer <api_key> ```  ## Limitations  ### Request Limit  * PLUS: 10 requests per minute * BUSINESS: 60 requests per minute  If the limit is exceeded, you will receive the HTTP error: `429 Too Many Requests`  ### Result Limit  All result lists are limited to 100 by default. This limit can be increased by the query parameter `limit` to a maximum of 1000.  ## Query filter  Many list resources can be filtered. In `/documents` you can filter e.g. by number with `/documents?number=111028654`. If you want to filter multiple numbers, you can either enter them separated by commas `/documents?number=111028654,222006895` or as an array `/documents?number[]=111028654&number[]=222006895`.  **Warning**: The maximum size of an HTTP request line in bytes is 4094. If this limit is exceeded, you will receive the HTTP error: `414 Request-URI Too Large`  ### Escape commas in query  You can escape commans in query `name=Patrick\\, Peter` if you submit the header `X-Easybill-Escape: true` in your request.  ## Property login_id  This is the login of your admin or employee account.  ## Date and Date-Time format Please use the timezone `Europe/Berlin`. * **date** = *Y-m-d* = `2016-12-31` * **date-time** = *Y-m-d H:i:s* = `2016-12-31 03:13:37`  Date or datetime can be `null` because the attributes have been added later and the entry is older.
 *
 * OpenAPI spec version: 1.70.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.33
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * Project Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Project implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Project';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'budget_amount' => 'int',
'budget_time' => 'int',
'customer_id' => 'int',
'hourly_rate' => 'float',
'id' => 'int',
'login_id' => 'int',
'name' => 'string',
'note' => 'string',
'status' => 'string',
'due_at' => '\DateTime',
'budget_notify_frequency' => 'string',
'consumed_time' => 'int',
'consumed_amount' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'budget_amount' => null,
'budget_time' => null,
'customer_id' => 'int64',
'hourly_rate' => 'float',
'id' => 'int64',
'login_id' => 'int64',
'name' => null,
'note' => null,
'status' => null,
'due_at' => 'date',
'budget_notify_frequency' => null,
'consumed_time' => null,
'consumed_amount' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'budget_amount' => 'budget_amount',
'budget_time' => 'budget_time',
'customer_id' => 'customer_id',
'hourly_rate' => 'hourly_rate',
'id' => 'id',
'login_id' => 'login_id',
'name' => 'name',
'note' => 'note',
'status' => 'status',
'due_at' => 'due_at',
'budget_notify_frequency' => 'budget_notify_frequency',
'consumed_time' => 'consumed_time',
'consumed_amount' => 'consumed_amount'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'budget_amount' => 'setBudgetAmount',
'budget_time' => 'setBudgetTime',
'customer_id' => 'setCustomerId',
'hourly_rate' => 'setHourlyRate',
'id' => 'setId',
'login_id' => 'setLoginId',
'name' => 'setName',
'note' => 'setNote',
'status' => 'setStatus',
'due_at' => 'setDueAt',
'budget_notify_frequency' => 'setBudgetNotifyFrequency',
'consumed_time' => 'setConsumedTime',
'consumed_amount' => 'setConsumedAmount'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'budget_amount' => 'getBudgetAmount',
'budget_time' => 'getBudgetTime',
'customer_id' => 'getCustomerId',
'hourly_rate' => 'getHourlyRate',
'id' => 'getId',
'login_id' => 'getLoginId',
'name' => 'getName',
'note' => 'getNote',
'status' => 'getStatus',
'due_at' => 'getDueAt',
'budget_notify_frequency' => 'getBudgetNotifyFrequency',
'consumed_time' => 'getConsumedTime',
'consumed_amount' => 'getConsumedAmount'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    const STATUS_OPEN = 'OPEN';
const STATUS_DONE = 'DONE';
const STATUS_CANCEL = 'CANCEL';
const BUDGET_NOTIFY_FREQUENCY_ALWAYS = 'ALWAYS';
const BUDGET_NOTIFY_FREQUENCY_ONCE = 'ONCE';
const BUDGET_NOTIFY_FREQUENCY_NEVER = 'NEVER';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_OPEN,
self::STATUS_DONE,
self::STATUS_CANCEL,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBudgetNotifyFrequencyAllowableValues()
    {
        return [
            self::BUDGET_NOTIFY_FREQUENCY_ALWAYS,
self::BUDGET_NOTIFY_FREQUENCY_ONCE,
self::BUDGET_NOTIFY_FREQUENCY_NEVER,        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['budget_amount'] = isset($data['budget_amount']) ? $data['budget_amount'] : null;
        $this->container['budget_time'] = isset($data['budget_time']) ? $data['budget_time'] : null;
        $this->container['customer_id'] = isset($data['customer_id']) ? $data['customer_id'] : null;
        $this->container['hourly_rate'] = isset($data['hourly_rate']) ? $data['hourly_rate'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['login_id'] = isset($data['login_id']) ? $data['login_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : 'OPEN';
        $this->container['due_at'] = isset($data['due_at']) ? $data['due_at'] : null;
        $this->container['budget_notify_frequency'] = isset($data['budget_notify_frequency']) ? $data['budget_notify_frequency'] : 'ALWAYS';
        $this->container['consumed_time'] = isset($data['consumed_time']) ? $data['consumed_time'] : null;
        $this->container['consumed_amount'] = isset($data['consumed_amount']) ? $data['consumed_amount'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getBudgetNotifyFrequencyAllowableValues();
        if (!is_null($this->container['budget_notify_frequency']) && !in_array($this->container['budget_notify_frequency'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'budget_notify_frequency', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets budget_amount
     *
     * @return int
     */
    public function getBudgetAmount()
    {
        return $this->container['budget_amount'];
    }

    /**
     * Sets budget_amount
     *
     * @param int $budget_amount Project budget in cents (e.g. \"150\" = 1.50€)
     *
     * @return $this
     */
    public function setBudgetAmount($budget_amount)
    {
        $this->container['budget_amount'] = $budget_amount;

        return $this;
    }

    /**
     * Gets budget_time
     *
     * @return int
     */
    public function getBudgetTime()
    {
        return $this->container['budget_time'];
    }

    /**
     * Sets budget_time
     *
     * @param int $budget_time Time budget in minutes (e.g. \"90\" = 1 hour and 30 minutes)
     *
     * @return $this
     */
    public function setBudgetTime($budget_time)
    {
        $this->container['budget_time'] = $budget_time;

        return $this;
    }

    /**
     * Gets customer_id
     *
     * @return int
     */
    public function getCustomerId()
    {
        return $this->container['customer_id'];
    }

    /**
     * Sets customer_id
     *
     * @param int $customer_id customer_id
     *
     * @return $this
     */
    public function setCustomerId($customer_id)
    {
        $this->container['customer_id'] = $customer_id;

        return $this;
    }

    /**
     * Gets hourly_rate
     *
     * @return float
     */
    public function getHourlyRate()
    {
        return $this->container['hourly_rate'];
    }

    /**
     * Sets hourly_rate
     *
     * @param float $hourly_rate Hourly rate in cents (e.g. \"150\" = 1.50€)
     *
     * @return $this
     */
    public function setHourlyRate($hourly_rate)
    {
        $this->container['hourly_rate'] = $hourly_rate;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets login_id
     *
     * @return int
     */
    public function getLoginId()
    {
        return $this->container['login_id'];
    }

    /**
     * Sets login_id
     *
     * @param int $login_id If omitted or null, the currently active login is used
     *
     * @return $this
     */
    public function setLoginId($login_id)
    {
        $this->container['login_id'] = $login_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     *
     * @param string $note note
     *
     * @return $this
     */
    public function setNote($note)
    {
        $this->container['note'] = $note;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets due_at
     *
     * @return \DateTime
     */
    public function getDueAt()
    {
        return $this->container['due_at'];
    }

    /**
     * Sets due_at
     *
     * @param \DateTime $due_at due_at
     *
     * @return $this
     */
    public function setDueAt($due_at)
    {
        $this->container['due_at'] = $due_at;

        return $this;
    }

    /**
     * Gets budget_notify_frequency
     *
     * @return string
     */
    public function getBudgetNotifyFrequency()
    {
        return $this->container['budget_notify_frequency'];
    }

    /**
     * Sets budget_notify_frequency
     *
     * @param string $budget_notify_frequency budget_notify_frequency
     *
     * @return $this
     */
    public function setBudgetNotifyFrequency($budget_notify_frequency)
    {
        $allowedValues = $this->getBudgetNotifyFrequencyAllowableValues();
        if (!is_null($budget_notify_frequency) && !in_array($budget_notify_frequency, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'budget_notify_frequency', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['budget_notify_frequency'] = $budget_notify_frequency;

        return $this;
    }

    /**
     * Gets consumed_time
     *
     * @return int
     */
    public function getConsumedTime()
    {
        return $this->container['consumed_time'];
    }

    /**
     * Sets consumed_time
     *
     * @param int $consumed_time consumed_time
     *
     * @return $this
     */
    public function setConsumedTime($consumed_time)
    {
        $this->container['consumed_time'] = $consumed_time;

        return $this;
    }

    /**
     * Gets consumed_amount
     *
     * @return int
     */
    public function getConsumedAmount()
    {
        return $this->container['consumed_amount'];
    }

    /**
     * Sets consumed_amount
     *
     * @param int $consumed_amount consumed_amount
     *
     * @return $this
     */
    public function setConsumedAmount($consumed_amount)
    {
        $this->container['consumed_amount'] = $consumed_amount;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
