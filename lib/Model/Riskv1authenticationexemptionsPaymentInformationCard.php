<?php
/**
 * Riskv1authenticationexemptionsPaymentInformationCard
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
 * Riskv1authenticationexemptionsPaymentInformationCard Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Riskv1authenticationexemptionsPaymentInformationCard implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'riskv1authenticationexemptions_paymentInformation_card';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'bin' => 'string',
        'type' => 'string',
        'expirationMonth' => 'string',
        'expirationYear' => 'string',
        'number' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'bin' => null,
        'type' => null,
        'expirationMonth' => null,
        'expirationYear' => null,
        'number' => null
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
        'bin' => 'bin',
        'type' => 'type',
        'expirationMonth' => 'expirationMonth',
        'expirationYear' => 'expirationYear',
        'number' => 'number'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'bin' => 'setBin',
        'type' => 'setType',
        'expirationMonth' => 'setExpirationMonth',
        'expirationYear' => 'setExpirationYear',
        'number' => 'setNumber'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'bin' => 'getBin',
        'type' => 'getType',
        'expirationMonth' => 'getExpirationMonth',
        'expirationYear' => 'getExpirationYear',
        'number' => 'getNumber'
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
        $this->container['bin'] = isset($data['bin']) ? $data['bin'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['expirationMonth'] = isset($data['expirationMonth']) ? $data['expirationMonth'] : null;
        $this->container['expirationYear'] = isset($data['expirationYear']) ? $data['expirationYear'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['bin'] === null) {
            $invalid_properties[] = "'bin' can't be null";
        }
        if ((strlen($this->container['bin']) > 6)) {
            $invalid_properties[] = "invalid value for 'bin', the character length must be smaller than or equal to 6.";
        }

        if ($this->container['type'] === null) {
            $invalid_properties[] = "'type' can't be null";
        }
        if ($this->container['expirationMonth'] === null) {
            $invalid_properties[] = "'expirationMonth' can't be null";
        }
        if ((strlen($this->container['expirationMonth']) > 2)) {
            $invalid_properties[] = "invalid value for 'expirationMonth', the character length must be smaller than or equal to 2.";
        }

        if ($this->container['expirationYear'] === null) {
            $invalid_properties[] = "'expirationYear' can't be null";
        }
        if ((strlen($this->container['expirationYear']) > 4)) {
            $invalid_properties[] = "invalid value for 'expirationYear', the character length must be smaller than or equal to 4.";
        }

        if ($this->container['number'] === null) {
            $invalid_properties[] = "'number' can't be null";
        }
        if ((strlen($this->container['number']) > 20)) {
            $invalid_properties[] = "invalid value for 'number', the character length must be smaller than or equal to 20.";
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

        if ($this->container['bin'] === null) {
            return false;
        }
        if (strlen($this->container['bin']) > 6) {
            return false;
        }
        if ($this->container['type'] === null) {
            return false;
        }
        if ($this->container['expirationMonth'] === null) {
            return false;
        }
        if (strlen($this->container['expirationMonth']) > 2) {
            return false;
        }
        if ($this->container['expirationYear'] === null) {
            return false;
        }
        if (strlen($this->container['expirationYear']) > 4) {
            return false;
        }
        if ($this->container['number'] === null) {
            return false;
        }
        if (strlen($this->container['number']) > 20) {
            return false;
        }
        return true;
    }


    /**
     * Gets bin
     * @return string
     */
    public function getBin()
    {
        return $this->container['bin'];
    }

    /**
     * Sets bin
     * @param string $bin description: The BIN is the first six digits of the card's Primary Account Number (PAN).
     * @return $this
     */
    public function setBin($bin)
    {
        if ((strlen($bin) > 6)) {
            throw new \InvalidArgumentException('invalid length for $bin when calling Riskv1authenticationexemptionsPaymentInformationCard., must be smaller than or equal to 6.');
        }

        $this->container['bin'] = $bin;

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
     * @param string $type Three-digit value that indicates the card type.  Type of card to authorize. - 001 Visa - 002 Mastercard - 003 Amex - 004 Discover - 005: Diners Club - 007: JCB - 024: Maestro (UK Domestic) - 036: Cartes Bancaires - 039 Encoded account number - 042: Maestro (International)  For the complete list of possible values, see `card_type` field description in the [Credit Card Services Using the SCMP API Guide.](http://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html)
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets expirationMonth
     * @return string
     */
    public function getExpirationMonth()
    {
        return $this->container['expirationMonth'];
    }

    /**
     * Sets expirationMonth
     * @param string $expirationMonth Two-digit month in which the payment card expires.  Format: `MM`.  Valid values: `01` through `12`.  #### Barclays and Streamline For Maestro (UK Domestic) and Maestro (International) cards on Barclays and Streamline, this must be a valid value (`01` through `12`) but is not required to be a valid expiration date. In other words, an expiration date that is in the past does not cause CyberSource to reject your request. However, an invalid expiration date might cause the issuer to reject your request.  #### Encoded Account Numbers For encoded account numbers (_type_=039), if there is no expiration date on the card, use `12`.  **Important** It is your responsibility to determine whether a field is required for the transaction you are requesting.  For processor-specific information, see the `customer_cc_expmo` field description in [Credit Card Services Using the SCMP API.](http://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html)
     * @return $this
     */
    public function setExpirationMonth($expirationMonth)
    {
        if ((strlen($expirationMonth) > 2)) {
            throw new \InvalidArgumentException('invalid length for $expirationMonth when calling Riskv1authenticationexemptionsPaymentInformationCard., must be smaller than or equal to 2.');
        }

        $this->container['expirationMonth'] = $expirationMonth;

        return $this;
    }

    /**
     * Gets expirationYear
     * @return string
     */
    public function getExpirationYear()
    {
        return $this->container['expirationYear'];
    }

    /**
     * Sets expirationYear
     * @param string $expirationYear Four-digit year in which the credit card expires.  Format: `YYYY`.  #### Barclays and Streamline For Maestro (UK Domestic) and Maestro (International) cards on Barclays and Streamline, this must be a valid value (`1900` through `3000`) but is not required to be a valid expiration date. In other words, an expiration date that is in the past does not cause CyberSource to reject your request. However, an invalid expiration date might cause the issuer to reject your request.  #### Encoded Account Numbers For encoded account numbers (**_type_**`=039`), if there is no expiration date on the card, use `2021`.  #### FDC Nashville Global and FDMS South You can send in 2 digits or 4 digits. If you send in 2 digits, they must be the last 2 digits of the year.  **Important** It is your responsibility to determine whether a field is required for the transaction you are requesting.  For processor-specific information, see the `customer_cc_expyr` field description in [Credit Card Services Using the SCMP API.](http://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html)
     * @return $this
     */
    public function setExpirationYear($expirationYear)
    {
        if ((strlen($expirationYear) > 4)) {
            throw new \InvalidArgumentException('invalid length for $expirationYear when calling Riskv1authenticationexemptionsPaymentInformationCard., must be smaller than or equal to 4.');
        }

        $this->container['expirationYear'] = $expirationYear;

        return $this;
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
     * @param string $number The customer’s payment card number, also known as the Primary Account Number (PAN). You can also use this field for encoded account numbers.  For processor-specific information, see the `customer_cc_number` field description in [Credit Card Services Using the SCMP API.](http://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html)
     * @return $this
     */
    public function setNumber($number)
    {
        if ((strlen($number) > 20)) {
            throw new \InvalidArgumentException('invalid length for $number when calling Riskv1authenticationexemptionsPaymentInformationCard., must be smaller than or equal to 20.');
        }

        $this->container['number'] = $number;

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


