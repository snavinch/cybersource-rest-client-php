<?php
/**
 * CreateReportSubscriptionRequest
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
 * CreateReportSubscriptionRequest Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CreateReportSubscriptionRequest implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'createReportSubscriptionRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'organizationId' => 'string',
        'reportDefinitionName' => 'string',
        'reportFields' => 'string[]',
        'reportMimeType' => 'string',
        'reportFrequency' => 'string',
        'reportInterval' => 'string',
        'reportName' => 'string',
        'timezone' => 'string',
        'startTime' => 'string',
        'startDay' => 'int',
        'reportFilters' => 'map[string,string[]]',
        'reportPreferences' => '\CyberSource\Model\Reportingv3reportsReportPreferences',
        'groupName' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'organizationId' => null,
        'reportDefinitionName' => null,
        'reportFields' => null,
        'reportMimeType' => null,
        'reportFrequency' => null,
        'reportInterval' => null,
        'reportName' => null,
        'timezone' => null,
        'startTime' => null,
        'startDay' => null,
        'reportFilters' => null,
        'reportPreferences' => null,
        'groupName' => null
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
        'organizationId' => 'organizationId',
        'reportDefinitionName' => 'reportDefinitionName',
        'reportFields' => 'reportFields',
        'reportMimeType' => 'reportMimeType',
        'reportFrequency' => 'reportFrequency',
        'reportInterval' => 'reportInterval',
        'reportName' => 'reportName',
        'timezone' => 'timezone',
        'startTime' => 'startTime',
        'startDay' => 'startDay',
        'reportFilters' => 'reportFilters',
        'reportPreferences' => 'reportPreferences',
        'groupName' => 'groupName'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'organizationId' => 'setOrganizationId',
        'reportDefinitionName' => 'setReportDefinitionName',
        'reportFields' => 'setReportFields',
        'reportMimeType' => 'setReportMimeType',
        'reportFrequency' => 'setReportFrequency',
        'reportInterval' => 'setReportInterval',
        'reportName' => 'setReportName',
        'timezone' => 'setTimezone',
        'startTime' => 'setStartTime',
        'startDay' => 'setStartDay',
        'reportFilters' => 'setReportFilters',
        'reportPreferences' => 'setReportPreferences',
        'groupName' => 'setGroupName'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'organizationId' => 'getOrganizationId',
        'reportDefinitionName' => 'getReportDefinitionName',
        'reportFields' => 'getReportFields',
        'reportMimeType' => 'getReportMimeType',
        'reportFrequency' => 'getReportFrequency',
        'reportInterval' => 'getReportInterval',
        'reportName' => 'getReportName',
        'timezone' => 'getTimezone',
        'startTime' => 'getStartTime',
        'startDay' => 'getStartDay',
        'reportFilters' => 'getReportFilters',
        'reportPreferences' => 'getReportPreferences',
        'groupName' => 'getGroupName'
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
        $this->container['organizationId'] = isset($data['organizationId']) ? $data['organizationId'] : null;
        $this->container['reportDefinitionName'] = isset($data['reportDefinitionName']) ? $data['reportDefinitionName'] : null;
        $this->container['reportFields'] = isset($data['reportFields']) ? $data['reportFields'] : null;
        $this->container['reportMimeType'] = isset($data['reportMimeType']) ? $data['reportMimeType'] : null;
        $this->container['reportFrequency'] = isset($data['reportFrequency']) ? $data['reportFrequency'] : null;
        $this->container['reportInterval'] = isset($data['reportInterval']) ? $data['reportInterval'] : null;
        $this->container['reportName'] = isset($data['reportName']) ? $data['reportName'] : null;
        $this->container['timezone'] = isset($data['timezone']) ? $data['timezone'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['startDay'] = isset($data['startDay']) ? $data['startDay'] : null;
        $this->container['reportFilters'] = isset($data['reportFilters']) ? $data['reportFilters'] : null;
        $this->container['reportPreferences'] = isset($data['reportPreferences']) ? $data['reportPreferences'] : null;
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if (!is_null($this->container['organizationId']) && !preg_match("/[a-zA-Z0-9-_]+/", $this->container['organizationId'])) {
            $invalid_properties[] = "invalid value for 'organizationId', must be conform to the pattern /[a-zA-Z0-9-_]+/.";
        }

        if ($this->container['reportDefinitionName'] === null) {
            $invalid_properties[] = "'reportDefinitionName' can't be null";
        }
        if ((strlen($this->container['reportDefinitionName']) > 80)) {
            $invalid_properties[] = "invalid value for 'reportDefinitionName', the character length must be smaller than or equal to 80.";
        }

        if ((strlen($this->container['reportDefinitionName']) < 1)) {
            $invalid_properties[] = "invalid value for 'reportDefinitionName', the character length must be bigger than or equal to 1.";
        }

        if (!preg_match("/[a-zA-Z0-9-]+/", $this->container['reportDefinitionName'])) {
            $invalid_properties[] = "invalid value for 'reportDefinitionName', must be conform to the pattern /[a-zA-Z0-9-]+/.";
        }

        if ($this->container['reportFields'] === null) {
            $invalid_properties[] = "'reportFields' can't be null";
        }
        if ($this->container['reportMimeType'] === null) {
            $invalid_properties[] = "'reportMimeType' can't be null";
        }
        if ($this->container['reportFrequency'] === null) {
            $invalid_properties[] = "'reportFrequency' can't be null";
        }
        if (!is_null($this->container['reportInterval']) && !preg_match("/^PT((([1-9]|1[0-9]|2[0-3])H(([1-9]|[1-4][0-9]|5[0-9])M)?)|((([1-9]|1[0-9]|2[0-3])H)?([1-9]|[1-4][0-9]|5[0-9])M))$/", $this->container['reportInterval'])) {
            $invalid_properties[] = "invalid value for 'reportInterval', must be conform to the pattern /^PT((([1-9]|1[0-9]|2[0-3])H(([1-9]|[1-4][0-9]|5[0-9])M)?)|((([1-9]|1[0-9]|2[0-3])H)?([1-9]|[1-4][0-9]|5[0-9])M))$/.";
        }

        if ($this->container['reportName'] === null) {
            $invalid_properties[] = "'reportName' can't be null";
        }
        if ((strlen($this->container['reportName']) > 128)) {
            $invalid_properties[] = "invalid value for 'reportName', the character length must be smaller than or equal to 128.";
        }

        if ((strlen($this->container['reportName']) < 1)) {
            $invalid_properties[] = "invalid value for 'reportName', the character length must be bigger than or equal to 1.";
        }

        if (!preg_match("/[a-zA-Z0-9-_ ]+/", $this->container['reportName'])) {
            $invalid_properties[] = "invalid value for 'reportName', must be conform to the pattern /[a-zA-Z0-9-_ ]+/.";
        }

        if ($this->container['timezone'] === null) {
            $invalid_properties[] = "'timezone' can't be null";
        }
        if ($this->container['startTime'] === null) {
            $invalid_properties[] = "'startTime' can't be null";
        }
        if (!is_null($this->container['startDay']) && ($this->container['startDay'] > 31)) {
            $invalid_properties[] = "invalid value for 'startDay', must be smaller than or equal to 31.";
        }

        if (!is_null($this->container['startDay']) && ($this->container['startDay'] < 1)) {
            $invalid_properties[] = "invalid value for 'startDay', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['groupName']) && !preg_match("/[a-zA-Z0-9-_ ]+/", $this->container['groupName'])) {
            $invalid_properties[] = "invalid value for 'groupName', must be conform to the pattern /[a-zA-Z0-9-_ ]+/.";
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

        if (!preg_match("/[a-zA-Z0-9-_]+/", $this->container['organizationId'])) {
            return false;
        }
        if ($this->container['reportDefinitionName'] === null) {
            return false;
        }
        if (strlen($this->container['reportDefinitionName']) > 80) {
            return false;
        }
        if (strlen($this->container['reportDefinitionName']) < 1) {
            return false;
        }
        if (!preg_match("/[a-zA-Z0-9-]+/", $this->container['reportDefinitionName'])) {
            return false;
        }
        if ($this->container['reportFields'] === null) {
            return false;
        }
        if ($this->container['reportMimeType'] === null) {
            return false;
        }
        if ($this->container['reportFrequency'] === null) {
            return false;
        }
        if (!preg_match("/^PT((([1-9]|1[0-9]|2[0-3])H(([1-9]|[1-4][0-9]|5[0-9])M)?)|((([1-9]|1[0-9]|2[0-3])H)?([1-9]|[1-4][0-9]|5[0-9])M))$/", $this->container['reportInterval'])) {
            return false;
        }
        if ($this->container['reportName'] === null) {
            return false;
        }
        if (strlen($this->container['reportName']) > 128) {
            return false;
        }
        if (strlen($this->container['reportName']) < 1) {
            return false;
        }
        if (!preg_match("/[a-zA-Z0-9-_ ]+/", $this->container['reportName'])) {
            return false;
        }
        if ($this->container['timezone'] === null) {
            return false;
        }
        if ($this->container['startTime'] === null) {
            return false;
        }
        if ($this->container['startDay'] > 31) {
            return false;
        }
        if ($this->container['startDay'] < 1) {
            return false;
        }
        if (!preg_match("/[a-zA-Z0-9-_ ]+/", $this->container['groupName'])) {
            return false;
        }
        return true;
    }


    /**
     * Gets organizationId
     * @return string
     */
    public function getOrganizationId()
    {
        return $this->container['organizationId'];
    }

    /**
     * Sets organizationId
     * @param string $organizationId Valid CyberSource organizationId
     * @return $this
     */
    public function setOrganizationId($organizationId)
    {

        if (!is_null($organizationId) && (!preg_match("/[a-zA-Z0-9-_]+/", $organizationId))) {
            throw new \InvalidArgumentException("invalid value for $organizationId when calling CreateReportSubscriptionRequest., must conform to the pattern /[a-zA-Z0-9-_]+/.");
        }

        $this->container['organizationId'] = $organizationId;

        return $this;
    }

    /**
     * Gets reportDefinitionName
     * @return string
     */
    public function getReportDefinitionName()
    {
        return $this->container['reportDefinitionName'];
    }

    /**
     * Sets reportDefinitionName
     * @param string $reportDefinitionName Valid Report Definition Name
     * @return $this
     */
    public function setReportDefinitionName($reportDefinitionName)
    {
        if ((strlen($reportDefinitionName) > 80)) {
            throw new \InvalidArgumentException('invalid length for $reportDefinitionName when calling CreateReportSubscriptionRequest., must be smaller than or equal to 80.');
        }
        if ((strlen($reportDefinitionName) < 1)) {
            throw new \InvalidArgumentException('invalid length for $reportDefinitionName when calling CreateReportSubscriptionRequest., must be bigger than or equal to 1.');
        }
        if ((!preg_match("/[a-zA-Z0-9-]+/", $reportDefinitionName))) {
            throw new \InvalidArgumentException("invalid value for $reportDefinitionName when calling CreateReportSubscriptionRequest., must conform to the pattern /[a-zA-Z0-9-]+/.");
        }

        $this->container['reportDefinitionName'] = $reportDefinitionName;

        return $this;
    }

    /**
     * Gets reportFields
     * @return string[]
     */
    public function getReportFields()
    {
        return $this->container['reportFields'];
    }

    /**
     * Sets reportFields
     * @param string[] $reportFields
     * @return $this
     */
    public function setReportFields($reportFields)
    {
        $this->container['reportFields'] = $reportFields;

        return $this;
    }

    /**
     * Gets reportMimeType
     * @return string
     */
    public function getReportMimeType()
    {
        return $this->container['reportMimeType'];
    }

    /**
     * Sets reportMimeType
     * @param string $reportMimeType Valid values: - application/xml - text/csv
     * @return $this
     */
    public function setReportMimeType($reportMimeType)
    {
        $this->container['reportMimeType'] = $reportMimeType;

        return $this;
    }

    /**
     * Gets reportFrequency
     * @return string
     */
    public function getReportFrequency()
    {
        return $this->container['reportFrequency'];
    }

    /**
     * Sets reportFrequency
     * @param string $reportFrequency 'The frequency for which subscription is created.'  Valid Values:   - 'DAILY'   - 'WEEKLY'   - 'MONTHLY'   - 'USER_DEFINED'
     * @return $this
     */
    public function setReportFrequency($reportFrequency)
    {
        $this->container['reportFrequency'] = $reportFrequency;

        return $this;
    }

    /**
     * Gets reportInterval
     * @return string
     */
    public function getReportInterval()
    {
        return $this->container['reportInterval'];
    }

    /**
     * Sets reportInterval
     * @param string $reportInterval If the reportFrequency is User-defined, reportInterval should be in **ISO 8601 time format** Please refer the following link to know more about ISO 8601 format.[Rfc Time Format](https://en.wikipedia.org/wiki/ISO_8601#Durations)  **Example time format for 2 hours and 30 Mins:**   - PT2H30M **NOTE: Do not document reportInterval field in developer center**
     * @return $this
     */
    public function setReportInterval($reportInterval)
    {

        if (!is_null($reportInterval) && (!preg_match("/^PT((([1-9]|1[0-9]|2[0-3])H(([1-9]|[1-4][0-9]|5[0-9])M)?)|((([1-9]|1[0-9]|2[0-3])H)?([1-9]|[1-4][0-9]|5[0-9])M))$/", $reportInterval))) {
            throw new \InvalidArgumentException("invalid value for $reportInterval when calling CreateReportSubscriptionRequest., must conform to the pattern /^PT((([1-9]|1[0-9]|2[0-3])H(([1-9]|[1-4][0-9]|5[0-9])M)?)|((([1-9]|1[0-9]|2[0-3])H)?([1-9]|[1-4][0-9]|5[0-9])M))$/.");
        }

        $this->container['reportInterval'] = $reportInterval;

        return $this;
    }

    /**
     * Gets reportName
     * @return string
     */
    public function getReportName()
    {
        return $this->container['reportName'];
    }

    /**
     * Sets reportName
     * @param string $reportName
     * @return $this
     */
    public function setReportName($reportName)
    {
        if ((strlen($reportName) > 128)) {
            throw new \InvalidArgumentException('invalid length for $reportName when calling CreateReportSubscriptionRequest., must be smaller than or equal to 128.');
        }
        if ((strlen($reportName) < 1)) {
            throw new \InvalidArgumentException('invalid length for $reportName when calling CreateReportSubscriptionRequest., must be bigger than or equal to 1.');
        }
        if ((!preg_match("/[a-zA-Z0-9-_ ]+/", $reportName))) {
            throw new \InvalidArgumentException("invalid value for $reportName when calling CreateReportSubscriptionRequest., must conform to the pattern /[a-zA-Z0-9-_ ]+/.");
        }

        $this->container['reportName'] = $reportName;

        return $this;
    }

    /**
     * Gets timezone
     * @return string
     */
    public function getTimezone()
    {
        return $this->container['timezone'];
    }

    /**
     * Sets timezone
     * @param string $timezone
     * @return $this
     */
    public function setTimezone($timezone)
    {
        $this->container['timezone'] = $timezone;

        return $this;
    }

    /**
     * Gets startTime
     * @return string
     */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
     * Sets startTime
     * @param string $startTime The hour at which the report generation should start. It should be in hhmm format.
     * @return $this
     */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;

        return $this;
    }

    /**
     * Gets startDay
     * @return int
     */
    public function getStartDay()
    {
        return $this->container['startDay'];
    }

    /**
     * Sets startDay
     * @param int $startDay This is the start day if the frequency is WEEKLY or MONTHLY. The value varies from 1-7 for WEEKLY and 1-31 for MONTHLY. For WEEKLY 1 means Sunday and 7 means Saturday. By default the value is 1.
     * @return $this
     */
    public function setStartDay($startDay)
    {

        if (!is_null($startDay) && ($startDay > 31)) {
            throw new \InvalidArgumentException('invalid value for $startDay when calling CreateReportSubscriptionRequest., must be smaller than or equal to 31.');
        }
        if (!is_null($startDay) && ($startDay < 1)) {
            throw new \InvalidArgumentException('invalid value for $startDay when calling CreateReportSubscriptionRequest., must be bigger than or equal to 1.');
        }

        $this->container['startDay'] = $startDay;

        return $this;
    }

    /**
     * Gets reportFilters
     * @return map[string,string[]]
     */
    public function getReportFilters()
    {
        return $this->container['reportFilters'];
    }

    /**
     * Sets reportFilters
     * @param map[string,string[]] $reportFilters List of filters to apply
     * @return $this
     */
    public function setReportFilters($reportFilters)
    {
        $this->container['reportFilters'] = $reportFilters;

        return $this;
    }

    /**
     * Gets reportPreferences
     * @return \CyberSource\Model\Reportingv3reportsReportPreferences
     */
    public function getReportPreferences()
    {
        return $this->container['reportPreferences'];
    }

    /**
     * Sets reportPreferences
     * @param \CyberSource\Model\Reportingv3reportsReportPreferences $reportPreferences
     * @return $this
     */
    public function setReportPreferences($reportPreferences)
    {
        $this->container['reportPreferences'] = $reportPreferences;

        return $this;
    }

    /**
     * Gets groupName
     * @return string
     */
    public function getGroupName()
    {
        return $this->container['groupName'];
    }

    /**
     * Sets groupName
     * @param string $groupName Valid GroupName
     * @return $this
     */
    public function setGroupName($groupName)
    {

        if (!is_null($groupName) && (!preg_match("/[a-zA-Z0-9-_ ]+/", $groupName))) {
            throw new \InvalidArgumentException("invalid value for $groupName when calling CreateReportSubscriptionRequest., must conform to the pattern /[a-zA-Z0-9-_ ]+/.");
        }

        $this->container['groupName'] = $groupName;

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


