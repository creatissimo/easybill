<?php
/**
 * PositionExportIdentifierExtended
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
 * PositionExportIdentifierExtended Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PositionExportIdentifierExtended implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PositionExportIdentifierExtended';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'null' => 'string',
'n_stb' => 'string',
'n_stb_ust_id' => 'string',
'n_stb_none_ust_id' => 'string',
'n_stb_im' => 'string',
'revc' => 'string',
'ig' => 'string',
'al' => 'string',
's_stfr' => 'string',
'small_business' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'null' => null,
'n_stb' => null,
'n_stb_ust_id' => null,
'n_stb_none_ust_id' => null,
'n_stb_im' => null,
'revc' => null,
'ig' => null,
'al' => null,
's_stfr' => null,
'small_business' => null    ];

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
        'null' => NULL,
'n_stb' => 'nStb',
'n_stb_ust_id' => 'nStbUstID',
'n_stb_none_ust_id' => 'nStbNoneUstID',
'n_stb_im' => 'nStbIm',
'revc' => 'revc',
'ig' => 'IG',
'al' => 'AL',
's_stfr' => 'sStfr',
'small_business' => 'smallBusiness'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'null' => 'setNull',
'n_stb' => 'setNStb',
'n_stb_ust_id' => 'setNStbUstId',
'n_stb_none_ust_id' => 'setNStbNoneUstId',
'n_stb_im' => 'setNStbIm',
'revc' => 'setRevc',
'ig' => 'setIg',
'al' => 'setAl',
's_stfr' => 'setSStfr',
'small_business' => 'setSmallBusiness'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'null' => 'getNull',
'n_stb' => 'getNStb',
'n_stb_ust_id' => 'getNStbUstId',
'n_stb_none_ust_id' => 'getNStbNoneUstId',
'n_stb_im' => 'getNStbIm',
'revc' => 'getRevc',
'ig' => 'getIg',
'al' => 'getAl',
's_stfr' => 'getSStfr',
'small_business' => 'getSmallBusiness'    ];

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
        $this->container['null'] = isset($data['null']) ? $data['null'] : null;
        $this->container['n_stb'] = isset($data['n_stb']) ? $data['n_stb'] : null;
        $this->container['n_stb_ust_id'] = isset($data['n_stb_ust_id']) ? $data['n_stb_ust_id'] : null;
        $this->container['n_stb_none_ust_id'] = isset($data['n_stb_none_ust_id']) ? $data['n_stb_none_ust_id'] : null;
        $this->container['n_stb_im'] = isset($data['n_stb_im']) ? $data['n_stb_im'] : null;
        $this->container['revc'] = isset($data['revc']) ? $data['revc'] : null;
        $this->container['ig'] = isset($data['ig']) ? $data['ig'] : null;
        $this->container['al'] = isset($data['al']) ? $data['al'] : null;
        $this->container['s_stfr'] = isset($data['s_stfr']) ? $data['s_stfr'] : null;
        $this->container['small_business'] = isset($data['small_business']) ? $data['small_business'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets null
     *
     * @return string
     */
    public function getNull()
    {
        return $this->container['null'];
    }

    /**
     * Sets null
     *
     * @param string $null Umsatzsteuerpflichtig
     *
     * @return $this
     */
    public function setNull($null)
    {
        $this->container['null'] = $null;

        return $this;
    }

    /**
     * Gets n_stb
     *
     * @return string
     */
    public function getNStb()
    {
        return $this->container['n_stb'];
    }

    /**
     * Sets n_stb
     *
     * @param string $n_stb Nicht steuerbar (Drittland)
     *
     * @return $this
     */
    public function setNStb($n_stb)
    {
        $this->container['n_stb'] = $n_stb;

        return $this;
    }

    /**
     * Gets n_stb_ust_id
     *
     * @return string
     */
    public function getNStbUstId()
    {
        return $this->container['n_stb_ust_id'];
    }

    /**
     * Sets n_stb_ust_id
     *
     * @param string $n_stb_ust_id Nicht steuerbar (EU mit USt-IdNr.)
     *
     * @return $this
     */
    public function setNStbUstId($n_stb_ust_id)
    {
        $this->container['n_stb_ust_id'] = $n_stb_ust_id;

        return $this;
    }

    /**
     * Gets n_stb_none_ust_id
     *
     * @return string
     */
    public function getNStbNoneUstId()
    {
        return $this->container['n_stb_none_ust_id'];
    }

    /**
     * Sets n_stb_none_ust_id
     *
     * @param string $n_stb_none_ust_id Nicht steuerbar (EU ohne USt-IdNr.)
     *
     * @return $this
     */
    public function setNStbNoneUstId($n_stb_none_ust_id)
    {
        $this->container['n_stb_none_ust_id'] = $n_stb_none_ust_id;

        return $this;
    }

    /**
     * Gets n_stb_im
     *
     * @return string
     */
    public function getNStbIm()
    {
        return $this->container['n_stb_im'];
    }

    /**
     * Sets n_stb_im
     *
     * @param string $n_stb_im Nicht steuerbarer Innenumsatz
     *
     * @return $this
     */
    public function setNStbIm($n_stb_im)
    {
        $this->container['n_stb_im'] = $n_stb_im;

        return $this;
    }

    /**
     * Gets revc
     *
     * @return string
     */
    public function getRevc()
    {
        return $this->container['revc'];
    }

    /**
     * Sets revc
     *
     * @param string $revc Steuerschuldwechsel §13b (Inland)
     *
     * @return $this
     */
    public function setRevc($revc)
    {
        $this->container['revc'] = $revc;

        return $this;
    }

    /**
     * Gets ig
     *
     * @return string
     */
    public function getIg()
    {
        return $this->container['ig'];
    }

    /**
     * Sets ig
     *
     * @param string $ig Innergemeinschaftliche Lieferung
     *
     * @return $this
     */
    public function setIg($ig)
    {
        $this->container['ig'] = $ig;

        return $this;
    }

    /**
     * Gets al
     *
     * @return string
     */
    public function getAl()
    {
        return $this->container['al'];
    }

    /**
     * Sets al
     *
     * @param string $al Ausfuhrlieferung
     *
     * @return $this
     */
    public function setAl($al)
    {
        $this->container['al'] = $al;

        return $this;
    }

    /**
     * Gets s_stfr
     *
     * @return string
     */
    public function getSStfr()
    {
        return $this->container['s_stfr'];
    }

    /**
     * Sets s_stfr
     *
     * @param string $s_stfr sonstige Steuerbefreiung
     *
     * @return $this
     */
    public function setSStfr($s_stfr)
    {
        $this->container['s_stfr'] = $s_stfr;

        return $this;
    }

    /**
     * Gets small_business
     *
     * @return string
     */
    public function getSmallBusiness()
    {
        return $this->container['small_business'];
    }

    /**
     * Sets small_business
     *
     * @param string $small_business Kleinunternehmen (Keine MwSt.)
     *
     * @return $this
     */
    public function setSmallBusiness($small_business)
    {
        $this->container['small_business'] = $small_business;

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
