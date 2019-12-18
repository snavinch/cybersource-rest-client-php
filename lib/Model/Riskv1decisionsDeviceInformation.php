<?php
/**
 * Riskv1decisionsDeviceInformation
 *
 * PHP version 5
 *
 * @category Class
 * @package  CyberSource
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * CyberSource Merged Spec
 *
 * All CyberSource API specs merged together. These are available at https://developer.cybersource.com/api/reference/api-reference.html
 *
 * OpenAPI spec version: 0.0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace CyberSource\Model;

use \ArrayAccess;

/**
 * Riskv1decisionsDeviceInformation Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Riskv1decisionsDeviceInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'riskv1decisions_deviceInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'cookiesAccepted' => 'string',
        'ipAddress' => 'string',
        'networkIpAddress' => 'string',
        'hostName' => 'string',
        'fingerprintSessionId' => 'string',
        'httpBrowserEmail' => 'string',
        'userAgent' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'cookiesAccepted' => null,
        'ipAddress' => null,
        'networkIpAddress' => null,
        'hostName' => null,
        'fingerprintSessionId' => null,
        'httpBrowserEmail' => null,
        'userAgent' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'cookiesAccepted' => 'cookiesAccepted',
        'ipAddress' => 'ipAddress',
        'networkIpAddress' => 'networkIpAddress',
        'hostName' => 'hostName',
        'fingerprintSessionId' => 'fingerprintSessionId',
        'httpBrowserEmail' => 'httpBrowserEmail',
        'userAgent' => 'userAgent'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'cookiesAccepted' => 'setCookiesAccepted',
        'ipAddress' => 'setIpAddress',
        'networkIpAddress' => 'setNetworkIpAddress',
        'hostName' => 'setHostName',
        'fingerprintSessionId' => 'setFingerprintSessionId',
        'httpBrowserEmail' => 'setHttpBrowserEmail',
        'userAgent' => 'setUserAgent'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'cookiesAccepted' => 'getCookiesAccepted',
        'ipAddress' => 'getIpAddress',
        'networkIpAddress' => 'getNetworkIpAddress',
        'hostName' => 'getHostName',
        'fingerprintSessionId' => 'getFingerprintSessionId',
        'httpBrowserEmail' => 'getHttpBrowserEmail',
        'userAgent' => 'getUserAgent'
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
        $this->container['cookiesAccepted'] = isset($data['cookiesAccepted']) ? $data['cookiesAccepted'] : null;
        $this->container['ipAddress'] = isset($data['ipAddress']) ? $data['ipAddress'] : null;
        $this->container['networkIpAddress'] = isset($data['networkIpAddress']) ? $data['networkIpAddress'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['fingerprintSessionId'] = isset($data['fingerprintSessionId']) ? $data['fingerprintSessionId'] : null;
        $this->container['httpBrowserEmail'] = isset($data['httpBrowserEmail']) ? $data['httpBrowserEmail'] : null;
        $this->container['userAgent'] = isset($data['userAgent']) ? $data['userAgent'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if (!is_null($this->container['ipAddress']) && (strlen($this->container['ipAddress']) > 48)) {
            $invalid_properties[] = "invalid value for 'ipAddress', the character length must be smaller than or equal to 48.";
        }

        if (!is_null($this->container['networkIpAddress']) && (strlen($this->container['networkIpAddress']) > 11)) {
            $invalid_properties[] = "invalid value for 'networkIpAddress', the character length must be smaller than or equal to 11.";
        }

        if (!is_null($this->container['hostName']) && (strlen($this->container['hostName']) > 60)) {
            $invalid_properties[] = "invalid value for 'hostName', the character length must be smaller than or equal to 60.";
        }

        if (!is_null($this->container['userAgent']) && (strlen($this->container['userAgent']) > 40)) {
            $invalid_properties[] = "invalid value for 'userAgent', the character length must be smaller than or equal to 40.";
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

        if (strlen($this->container['ipAddress']) > 48) {
            return false;
        }
        if (strlen($this->container['networkIpAddress']) > 11) {
            return false;
        }
        if (strlen($this->container['hostName']) > 60) {
            return false;
        }
        if (strlen($this->container['userAgent']) > 40) {
            return false;
        }
        return true;
    }


    /**
     * Gets cookiesAccepted
     * @return string
     */
    public function getCookiesAccepted()
    {
        return $this->container['cookiesAccepted'];
    }

    /**
     * Sets cookiesAccepted
     * @param string $cookiesAccepted Whether the customer’s browser accepts cookies. This field can contain one of the following values: - `yes`: The customer’s browser accepts cookies. - `no`: The customer’s browser does not accept cookies.
     * @return $this
     */
    public function setCookiesAccepted($cookiesAccepted)
    {
        $this->container['cookiesAccepted'] = $cookiesAccepted;

        return $this;
    }

    /**
     * Gets ipAddress
     * @return string
     */
    public function getIpAddress()
    {
        return $this->container['ipAddress'];
    }

    /**
     * Sets ipAddress
     * @param string $ipAddress IP address of the customer.
     * @return $this
     */
    public function setIpAddress($ipAddress)
    {
        if (!is_null($ipAddress) && (strlen($ipAddress) > 48)) {
            throw new \InvalidArgumentException('invalid length for $ipAddress when calling Riskv1decisionsDeviceInformation., must be smaller than or equal to 48.');
        }

        $this->container['ipAddress'] = $ipAddress;

        return $this;
    }

    /**
     * Gets networkIpAddress
     * @return string
     */
    public function getNetworkIpAddress()
    {
        return $this->container['networkIpAddress'];
    }

    /**
     * Sets networkIpAddress
     * @param string $networkIpAddress Network IP address of the customer (for example, 10.1.27). A network IP address includes up to 256 IP addresses.
     * @return $this
     */
    public function setNetworkIpAddress($networkIpAddress)
    {
        if (!is_null($networkIpAddress) && (strlen($networkIpAddress) > 11)) {
            throw new \InvalidArgumentException('invalid length for $networkIpAddress when calling Riskv1decisionsDeviceInformation., must be smaller than or equal to 11.');
        }

        $this->container['networkIpAddress'] = $networkIpAddress;

        return $this;
    }

    /**
     * Gets hostName
     * @return string
     */
    public function getHostName()
    {
        return $this->container['hostName'];
    }

    /**
     * Sets hostName
     * @param string $hostName DNS resolved hostname from `ipAddress`.
     * @return $this
     */
    public function setHostName($hostName)
    {
        if (!is_null($hostName) && (strlen($hostName) > 60)) {
            throw new \InvalidArgumentException('invalid length for $hostName when calling Riskv1decisionsDeviceInformation., must be smaller than or equal to 60.');
        }

        $this->container['hostName'] = $hostName;

        return $this;
    }

    /**
     * Gets fingerprintSessionId
     * @return string
     */
    public function getFingerprintSessionId()
    {
        return $this->container['fingerprintSessionId'];
    }

    /**
     * Sets fingerprintSessionId
     * @param string $fingerprintSessionId Field that contains the session ID that you send to Decision Manager to obtain the device fingerprint information. The string can contain uppercase and lowercase letters, digits, hyphen (-), and underscore (_). However, do not use the same uppercase and lowercase letters to indicate different session IDs.  The session ID must be unique for each merchant ID. You can use any string that you are already generating, such as an order number or web session ID.  The session ID must be unique for each page load, regardless of an individual’s web session ID. If a user navigates to a profiled page and is assigned a web session, navigates away from the profiled page, then navigates back to the profiled page, the generated session ID should be different and unique. You may use a web session ID, but it is preferable to use an application GUID (Globally Unique Identifier). This measure ensures that a unique ID is generated every time the page is loaded, even if it is the same user reloading the page.
     * @return $this
     */
    public function setFingerprintSessionId($fingerprintSessionId)
    {
        $this->container['fingerprintSessionId'] = $fingerprintSessionId;

        return $this;
    }

    /**
     * Gets httpBrowserEmail
     * @return string
     */
    public function getHttpBrowserEmail()
    {
        return $this->container['httpBrowserEmail'];
    }

    /**
     * Sets httpBrowserEmail
     * @param string $httpBrowserEmail Email address set in the customer’s browser, which may differ from customer email.
     * @return $this
     */
    public function setHttpBrowserEmail($httpBrowserEmail)
    {
        $this->container['httpBrowserEmail'] = $httpBrowserEmail;

        return $this;
    }

    /**
     * Gets userAgent
     * @return string
     */
    public function getUserAgent()
    {
        return $this->container['userAgent'];
    }

    /**
     * Sets userAgent
     * @param string $userAgent Customer’s browser as identified from the HTTP header data. For example, `Mozilla` is the value that identifies the Netscape browser.
     * @return $this
     */
    public function setUserAgent($userAgent)
    {
        if (!is_null($userAgent) && (strlen($userAgent) > 40)) {
            throw new \InvalidArgumentException('invalid length for $userAgent when calling Riskv1decisionsDeviceInformation., must be smaller than or equal to 40.');
        }

        $this->container['userAgent'] = $userAgent;

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
            return json_encode(\CyberSource\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\CyberSource\ObjectSerializer::sanitizeForSerialization($this));
    }
}


