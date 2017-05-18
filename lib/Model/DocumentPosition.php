<?php
/**
 * DocumentPosition
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
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
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * DocumentPosition Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class DocumentPosition implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'DocumentPosition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'number' => 'string',
        'description' => 'string',
        'quantity' => 'float',
        'quantity_str' => 'string',
        'unit' => 'string',
        'type' => 'string',
        'position' => 'int',
        'single_price_net' => 'float',
        'single_price_gross' => 'float',
        'vat_percent' => 'float',
        'discount' => 'float',
        'discount_type' => 'string',
        'position_id' => 'int',
        'total_price_net' => 'float',
        'total_price_gross' => 'float',
        'total_vat' => 'float',
        'serial_number_id' => 'string',
        'serial_number' => 'string',
        'booking_account' => 'string',
        'export_cost_1' => 'string',
        'export_cost_2' => 'string',
        'cost_price_net' => 'float',
        'cost_price_total' => 'float',
        'cost_price_charge' => 'float',
        'cost_price_charge_type' => 'string',
        'id' => 'int'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'number' => 'number',
        'description' => 'description',
        'quantity' => 'quantity',
        'quantity_str' => 'quantity_str',
        'unit' => 'unit',
        'type' => 'type',
        'position' => 'position',
        'single_price_net' => 'single_price_net',
        'single_price_gross' => 'single_price_gross',
        'vat_percent' => 'vat_percent',
        'discount' => 'discount',
        'discount_type' => 'discount_type',
        'position_id' => 'position_id',
        'total_price_net' => 'total_price_net',
        'total_price_gross' => 'total_price_gross',
        'total_vat' => 'total_vat',
        'serial_number_id' => 'serial_number_id',
        'serial_number' => 'serial_number',
        'booking_account' => 'booking_account',
        'export_cost_1' => 'export_cost_1',
        'export_cost_2' => 'export_cost_2',
        'cost_price_net' => 'cost_price_net',
        'cost_price_total' => 'cost_price_total',
        'cost_price_charge' => 'cost_price_charge',
        'cost_price_charge_type' => 'cost_price_charge_type',
        'id' => 'id'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'number' => 'setNumber',
        'description' => 'setDescription',
        'quantity' => 'setQuantity',
        'quantity_str' => 'setQuantityStr',
        'unit' => 'setUnit',
        'type' => 'setType',
        'position' => 'setPosition',
        'single_price_net' => 'setSinglePriceNet',
        'single_price_gross' => 'setSinglePriceGross',
        'vat_percent' => 'setVatPercent',
        'discount' => 'setDiscount',
        'discount_type' => 'setDiscountType',
        'position_id' => 'setPositionId',
        'total_price_net' => 'setTotalPriceNet',
        'total_price_gross' => 'setTotalPriceGross',
        'total_vat' => 'setTotalVat',
        'serial_number_id' => 'setSerialNumberId',
        'serial_number' => 'setSerialNumber',
        'booking_account' => 'setBookingAccount',
        'export_cost_1' => 'setExportCost1',
        'export_cost_2' => 'setExportCost2',
        'cost_price_net' => 'setCostPriceNet',
        'cost_price_total' => 'setCostPriceTotal',
        'cost_price_charge' => 'setCostPriceCharge',
        'cost_price_charge_type' => 'setCostPriceChargeType',
        'id' => 'setId'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'number' => 'getNumber',
        'description' => 'getDescription',
        'quantity' => 'getQuantity',
        'quantity_str' => 'getQuantityStr',
        'unit' => 'getUnit',
        'type' => 'getType',
        'position' => 'getPosition',
        'single_price_net' => 'getSinglePriceNet',
        'single_price_gross' => 'getSinglePriceGross',
        'vat_percent' => 'getVatPercent',
        'discount' => 'getDiscount',
        'discount_type' => 'getDiscountType',
        'position_id' => 'getPositionId',
        'total_price_net' => 'getTotalPriceNet',
        'total_price_gross' => 'getTotalPriceGross',
        'total_vat' => 'getTotalVat',
        'serial_number_id' => 'getSerialNumberId',
        'serial_number' => 'getSerialNumber',
        'booking_account' => 'getBookingAccount',
        'export_cost_1' => 'getExportCost1',
        'export_cost_2' => 'getExportCost2',
        'cost_price_net' => 'getCostPriceNet',
        'cost_price_total' => 'getCostPriceTotal',
        'cost_price_charge' => 'getCostPriceCharge',
        'cost_price_charge_type' => 'getCostPriceChargeType',
        'id' => 'getId'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    const TYPE_POSITION = 'POSITION';
    const TYPE_POSITION_NOCALC = 'POSITION_NOCALC';
    const TYPE_TEXT = 'TEXT';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_POSITION,
            self::TYPE_POSITION_NOCALC,
            self::TYPE_TEXT,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['quantity_str'] = isset($data['quantity_str']) ? $data['quantity_str'] : null;
        $this->container['unit'] = isset($data['unit']) ? $data['unit'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : 'POSITION';
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['single_price_net'] = isset($data['single_price_net']) ? $data['single_price_net'] : null;
        $this->container['single_price_gross'] = isset($data['single_price_gross']) ? $data['single_price_gross'] : null;
        $this->container['vat_percent'] = isset($data['vat_percent']) ? $data['vat_percent'] : null;
        $this->container['discount'] = isset($data['discount']) ? $data['discount'] : null;
        $this->container['discount_type'] = isset($data['discount_type']) ? $data['discount_type'] : null;
        $this->container['position_id'] = isset($data['position_id']) ? $data['position_id'] : null;
        $this->container['total_price_net'] = isset($data['total_price_net']) ? $data['total_price_net'] : null;
        $this->container['total_price_gross'] = isset($data['total_price_gross']) ? $data['total_price_gross'] : null;
        $this->container['total_vat'] = isset($data['total_vat']) ? $data['total_vat'] : null;
        $this->container['serial_number_id'] = isset($data['serial_number_id']) ? $data['serial_number_id'] : null;
        $this->container['serial_number'] = isset($data['serial_number']) ? $data['serial_number'] : null;
        $this->container['booking_account'] = isset($data['booking_account']) ? $data['booking_account'] : null;
        $this->container['export_cost_1'] = isset($data['export_cost_1']) ? $data['export_cost_1'] : null;
        $this->container['export_cost_2'] = isset($data['export_cost_2']) ? $data['export_cost_2'] : null;
        $this->container['cost_price_net'] = isset($data['cost_price_net']) ? $data['cost_price_net'] : null;
        $this->container['cost_price_total'] = isset($data['cost_price_total']) ? $data['cost_price_total'] : null;
        $this->container['cost_price_charge'] = isset($data['cost_price_charge']) ? $data['cost_price_charge'] : null;
        $this->container['cost_price_charge_type'] = isset($data['cost_price_charge_type']) ? $data['cost_price_charge_type'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = $this->getTypeAllowableValues();
        if (!in_array($this->container['type'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        $allowed_values = $this->getTypeAllowableValues();
        if (!in_array($this->container['type'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets number
     * @return string
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     * @param string $number
     * @return $this
     */
    public function setNumber($number)
    {
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets quantity
     * @return float
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     * @param float $quantity
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets quantity_str
     * @return string
     */
    public function getQuantityStr()
    {
        return $this->container['quantity_str'];
    }

    /**
     * Sets quantity_str
     * @param string $quantity_str Use quantity_str if you want set quantity like: 1:30 h or 3x5 m. quantity_str overwrite quantity.
     * @return $this
     */
    public function setQuantityStr($quantity_str)
    {
        $this->container['quantity_str'] = $quantity_str;

        return $this;
    }

    /**
     * Gets unit
     * @return string
     */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
     * Sets unit
     * @param string $unit
     * @return $this
     */
    public function setUnit($unit)
    {
        $this->container['unit'] = $unit;

        return $this;
    }

    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        $allowed_values = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets position
     * @return int
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     * @param int $position
     * @return $this
     */
    public function setPosition($position)
    {
        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets single_price_net
     * @return float
     */
    public function getSinglePriceNet()
    {
        return $this->container['single_price_net'];
    }

    /**
     * Sets single_price_net
     * @param float $single_price_net
     * @return $this
     */
    public function setSinglePriceNet($single_price_net)
    {
        $this->container['single_price_net'] = $single_price_net;

        return $this;
    }

    /**
     * Gets single_price_gross
     * @return float
     */
    public function getSinglePriceGross()
    {
        return $this->container['single_price_gross'];
    }

    /**
     * Sets single_price_gross
     * @param float $single_price_gross
     * @return $this
     */
    public function setSinglePriceGross($single_price_gross)
    {
        $this->container['single_price_gross'] = $single_price_gross;

        return $this;
    }

    /**
     * Gets vat_percent
     * @return float
     */
    public function getVatPercent()
    {
        return $this->container['vat_percent'];
    }

    /**
     * Sets vat_percent
     * @param float $vat_percent
     * @return $this
     */
    public function setVatPercent($vat_percent)
    {
        $this->container['vat_percent'] = $vat_percent;

        return $this;
    }

    /**
     * Gets discount
     * @return float
     */
    public function getDiscount()
    {
        return $this->container['discount'];
    }

    /**
     * Sets discount
     * @param float $discount
     * @return $this
     */
    public function setDiscount($discount)
    {
        $this->container['discount'] = $discount;

        return $this;
    }

    /**
     * Gets discount_type
     * @return string
     */
    public function getDiscountType()
    {
        return $this->container['discount_type'];
    }

    /**
     * Sets discount_type
     * @param string $discount_type
     * @return $this
     */
    public function setDiscountType($discount_type)
    {
        $this->container['discount_type'] = $discount_type;

        return $this;
    }

    /**
     * Gets position_id
     * @return int
     */
    public function getPositionId()
    {
        return $this->container['position_id'];
    }

    /**
     * Sets position_id
     * @param int $position_id
     * @return $this
     */
    public function setPositionId($position_id)
    {
        $this->container['position_id'] = $position_id;

        return $this;
    }

    /**
     * Gets total_price_net
     * @return float
     */
    public function getTotalPriceNet()
    {
        return $this->container['total_price_net'];
    }

    /**
     * Sets total_price_net
     * @param float $total_price_net
     * @return $this
     */
    public function setTotalPriceNet($total_price_net)
    {
        $this->container['total_price_net'] = $total_price_net;

        return $this;
    }

    /**
     * Gets total_price_gross
     * @return float
     */
    public function getTotalPriceGross()
    {
        return $this->container['total_price_gross'];
    }

    /**
     * Sets total_price_gross
     * @param float $total_price_gross
     * @return $this
     */
    public function setTotalPriceGross($total_price_gross)
    {
        $this->container['total_price_gross'] = $total_price_gross;

        return $this;
    }

    /**
     * Gets total_vat
     * @return float
     */
    public function getTotalVat()
    {
        return $this->container['total_vat'];
    }

    /**
     * Sets total_vat
     * @param float $total_vat
     * @return $this
     */
    public function setTotalVat($total_vat)
    {
        $this->container['total_vat'] = $total_vat;

        return $this;
    }

    /**
     * Gets serial_number_id
     * @return string
     */
    public function getSerialNumberId()
    {
        return $this->container['serial_number_id'];
    }

    /**
     * Sets serial_number_id
     * @param string $serial_number_id
     * @return $this
     */
    public function setSerialNumberId($serial_number_id)
    {
        $this->container['serial_number_id'] = $serial_number_id;

        return $this;
    }

    /**
     * Gets serial_number
     * @return string
     */
    public function getSerialNumber()
    {
        return $this->container['serial_number'];
    }

    /**
     * Sets serial_number
     * @param string $serial_number
     * @return $this
     */
    public function setSerialNumber($serial_number)
    {
        $this->container['serial_number'] = $serial_number;

        return $this;
    }

    /**
     * Gets booking_account
     * @return string
     */
    public function getBookingAccount()
    {
        return $this->container['booking_account'];
    }

    /**
     * Sets booking_account
     * @param string $booking_account
     * @return $this
     */
    public function setBookingAccount($booking_account)
    {
        $this->container['booking_account'] = $booking_account;

        return $this;
    }

    /**
     * Gets export_cost_1
     * @return string
     */
    public function getExportCost1()
    {
        return $this->container['export_cost_1'];
    }

    /**
     * Sets export_cost_1
     * @param string $export_cost_1
     * @return $this
     */
    public function setExportCost1($export_cost_1)
    {
        $this->container['export_cost_1'] = $export_cost_1;

        return $this;
    }

    /**
     * Gets export_cost_2
     * @return string
     */
    public function getExportCost2()
    {
        return $this->container['export_cost_2'];
    }

    /**
     * Sets export_cost_2
     * @param string $export_cost_2
     * @return $this
     */
    public function setExportCost2($export_cost_2)
    {
        $this->container['export_cost_2'] = $export_cost_2;

        return $this;
    }

    /**
     * Gets cost_price_net
     * @return float
     */
    public function getCostPriceNet()
    {
        return $this->container['cost_price_net'];
    }

    /**
     * Sets cost_price_net
     * @param float $cost_price_net
     * @return $this
     */
    public function setCostPriceNet($cost_price_net)
    {
        $this->container['cost_price_net'] = $cost_price_net;

        return $this;
    }

    /**
     * Gets cost_price_total
     * @return float
     */
    public function getCostPriceTotal()
    {
        return $this->container['cost_price_total'];
    }

    /**
     * Sets cost_price_total
     * @param float $cost_price_total
     * @return $this
     */
    public function setCostPriceTotal($cost_price_total)
    {
        $this->container['cost_price_total'] = $cost_price_total;

        return $this;
    }

    /**
     * Gets cost_price_charge
     * @return float
     */
    public function getCostPriceCharge()
    {
        return $this->container['cost_price_charge'];
    }

    /**
     * Sets cost_price_charge
     * @param float $cost_price_charge
     * @return $this
     */
    public function setCostPriceCharge($cost_price_charge)
    {
        $this->container['cost_price_charge'] = $cost_price_charge;

        return $this;
    }

    /**
     * Gets cost_price_charge_type
     * @return string
     */
    public function getCostPriceChargeType()
    {
        return $this->container['cost_price_charge_type'];
    }

    /**
     * Sets cost_price_charge_type
     * @param string $cost_price_charge_type
     * @return $this
     */
    public function setCostPriceChargeType($cost_price_charge_type)
    {
        $this->container['cost_price_charge_type'] = $cost_price_charge_type;

        return $this;
    }

    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


