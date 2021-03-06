<?php
/**
 * Revision
 *
 * PHP version 5
 *
 * @category Class
 * @package  DocuSign\eSign
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * DocuSign REST API
 *
 * The DocuSign REST API provides you with a powerful, convenient, and simple Web services API for interacting with DocuSign.
 *
 * OpenAPI spec version: v2.1
 * Contact: devcenter@docusign.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace DocuSign\eSign\Model;

use \ArrayAccess;

/**
 * Revision Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Revision implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'revision';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'end_data' => 'string',
        'field_name' => 'string',
        'max_signature_length' => 'string',
        'signature_properties' => '\DocuSign\eSign\Model\SignatureProperties',
        'signature_type' => 'string',
        'start_data' => 'string'
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
        'end_data' => 'endData',
        'field_name' => 'fieldName',
        'max_signature_length' => 'maxSignatureLength',
        'signature_properties' => 'signatureProperties',
        'signature_type' => 'signatureType',
        'start_data' => 'startData'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'end_data' => 'setEndData',
        'field_name' => 'setFieldName',
        'max_signature_length' => 'setMaxSignatureLength',
        'signature_properties' => 'setSignatureProperties',
        'signature_type' => 'setSignatureType',
        'start_data' => 'setStartData'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'end_data' => 'getEndData',
        'field_name' => 'getFieldName',
        'max_signature_length' => 'getMaxSignatureLength',
        'signature_properties' => 'getSignatureProperties',
        'signature_type' => 'getSignatureType',
        'start_data' => 'getStartData'
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
        $this->container['end_data'] = isset($data['end_data']) ? $data['end_data'] : null;
        $this->container['field_name'] = isset($data['field_name']) ? $data['field_name'] : null;
        $this->container['max_signature_length'] = isset($data['max_signature_length']) ? $data['max_signature_length'] : null;
        $this->container['signature_properties'] = isset($data['signature_properties']) ? $data['signature_properties'] : null;
        $this->container['signature_type'] = isset($data['signature_type']) ? $data['signature_type'] : null;
        $this->container['start_data'] = isset($data['start_data']) ? $data['start_data'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        return true;
    }


    /**
     * Gets end_data
     * @return string
     */
    public function getEndData()
    {
        return $this->container['end_data'];
    }

    /**
     * Sets end_data
     * @param string $end_data 
     * @return $this
     */
    public function setEndData($end_data)
    {
        $this->container['end_data'] = $end_data;

        return $this;
    }

    /**
     * Gets field_name
     * @return string
     */
    public function getFieldName()
    {
        return $this->container['field_name'];
    }

    /**
     * Sets field_name
     * @param string $field_name 
     * @return $this
     */
    public function setFieldName($field_name)
    {
        $this->container['field_name'] = $field_name;

        return $this;
    }

    /**
     * Gets max_signature_length
     * @return string
     */
    public function getMaxSignatureLength()
    {
        return $this->container['max_signature_length'];
    }

    /**
     * Sets max_signature_length
     * @param string $max_signature_length 
     * @return $this
     */
    public function setMaxSignatureLength($max_signature_length)
    {
        $this->container['max_signature_length'] = $max_signature_length;

        return $this;
    }

    /**
     * Gets signature_properties
     * @return \DocuSign\eSign\Model\SignatureProperties
     */
    public function getSignatureProperties()
    {
        return $this->container['signature_properties'];
    }

    /**
     * Sets signature_properties
     * @param \DocuSign\eSign\Model\SignatureProperties $signature_properties
     * @return $this
     */
    public function setSignatureProperties($signature_properties)
    {
        $this->container['signature_properties'] = $signature_properties;

        return $this;
    }

    /**
     * Gets signature_type
     * @return string
     */
    public function getSignatureType()
    {
        return $this->container['signature_type'];
    }

    /**
     * Sets signature_type
     * @param string $signature_type 
     * @return $this
     */
    public function setSignatureType($signature_type)
    {
        $this->container['signature_type'] = $signature_type;

        return $this;
    }

    /**
     * Gets start_data
     * @return string
     */
    public function getStartData()
    {
        return $this->container['start_data'];
    }

    /**
     * Sets start_data
     * @param string $start_data 
     * @return $this
     */
    public function setStartData($start_data)
    {
        $this->container['start_data'] = $start_data;

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
            return json_encode(\DocuSign\eSign\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\DocuSign\eSign\ObjectSerializer::sanitizeForSerialization($this));
    }
}


