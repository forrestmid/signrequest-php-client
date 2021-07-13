<?php
/**
 * WebhookSubscription
 *
 * PHP version 5
 *
 * @category Class
 * @package  SignRequest
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * SignRequest API
 *
 * API for SignRequest.com
 * OpenAPI spec version: v1
 * Contact: tech-support@signrequest.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.11
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SignRequest\Model;

use \ArrayAccess;
use \SignRequest\ObjectSerializer;

/**
 * WebhookSubscription Class Doc Comment
 *
 * @category Class
 * @package  SignRequest
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WebhookSubscription implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WebhookSubscription';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'url' => 'string',
        'uuid' => 'string',
        'name' => 'string',
        'event_type' => 'string',
        'callback_url' => 'string',
        'integration' => 'string',
        'team' => '\SignRequest\Model\DocumentTeam',
        'created' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'url' => 'uri',
        'uuid' => null,
        'name' => null,
        'event_type' => null,
        'callback_url' => 'uri',
        'integration' => null,
        'team' => null,
        'created' => 'date-time'
    ];

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
        'url' => 'url',
        'uuid' => 'uuid',
        'name' => 'name',
        'event_type' => 'event_type',
        'callback_url' => 'callback_url',
        'integration' => 'integration',
        'team' => 'team',
        'created' => 'created'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'url' => 'setUrl',
        'uuid' => 'setUuid',
        'name' => 'setName',
        'event_type' => 'setEventType',
        'callback_url' => 'setCallbackUrl',
        'integration' => 'setIntegration',
        'team' => 'setTeam',
        'created' => 'setCreated'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'url' => 'getUrl',
        'uuid' => 'getUuid',
        'name' => 'getName',
        'event_type' => 'getEventType',
        'callback_url' => 'getCallbackUrl',
        'integration' => 'getIntegration',
        'team' => 'getTeam',
        'created' => 'getCreated'
    ];

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

    const EVENT_TYPE_CONVERT_ERROR = 'convert_error';
    const EVENT_TYPE_CONVERTED = 'converted';
    const EVENT_TYPE_SENDING_ERROR = 'sending_error';
    const EVENT_TYPE_SENT = 'sent';
    const EVENT_TYPE_DECLINED = 'declined';
    const EVENT_TYPE_CANCELLED = 'cancelled';
    const EVENT_TYPE_EXPIRED = 'expired';
    const EVENT_TYPE_SIGNED = 'signed';
    const EVENT_TYPE_VIEWED = 'viewed';
    const EVENT_TYPE_DOWNLOADED = 'downloaded';
    const EVENT_TYPE_SIGNER_SIGNED = 'signer_signed';
    const EVENT_TYPE_SIGNER_EMAIL_BOUNCED = 'signer_email_bounced';
    const EVENT_TYPE_SIGNER_VIEWED_EMAIL = 'signer_viewed_email';
    const EVENT_TYPE_SIGNER_VIEWED = 'signer_viewed';
    const EVENT_TYPE_SIGNER_FORWARDED = 'signer_forwarded';
    const EVENT_TYPE_SIGNER_DOWNLOADED = 'signer_downloaded';
    const EVENT_TYPE_SIGNREQUEST_RECEIVED = 'signrequest_received';
    const INTEGRATION_MFILES = 'mfiles';
    const INTEGRATION_SALESFORCE = 'salesforce';
    const INTEGRATION_FORMDESK = 'formdesk';
    const INTEGRATION_ZAPIER = 'zapier';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEventTypeAllowableValues()
    {
        return [
            self::EVENT_TYPE_CONVERT_ERROR,
            self::EVENT_TYPE_CONVERTED,
            self::EVENT_TYPE_SENDING_ERROR,
            self::EVENT_TYPE_SENT,
            self::EVENT_TYPE_DECLINED,
            self::EVENT_TYPE_CANCELLED,
            self::EVENT_TYPE_EXPIRED,
            self::EVENT_TYPE_SIGNED,
            self::EVENT_TYPE_VIEWED,
            self::EVENT_TYPE_DOWNLOADED,
            self::EVENT_TYPE_SIGNER_SIGNED,
            self::EVENT_TYPE_SIGNER_EMAIL_BOUNCED,
            self::EVENT_TYPE_SIGNER_VIEWED_EMAIL,
            self::EVENT_TYPE_SIGNER_VIEWED,
            self::EVENT_TYPE_SIGNER_FORWARDED,
            self::EVENT_TYPE_SIGNER_DOWNLOADED,
            self::EVENT_TYPE_SIGNREQUEST_RECEIVED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getIntegrationAllowableValues()
    {
        return [
            self::INTEGRATION_MFILES,
            self::INTEGRATION_SALESFORCE,
            self::INTEGRATION_FORMDESK,
            self::INTEGRATION_ZAPIER,
        ];
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
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['event_type'] = isset($data['event_type']) ? $data['event_type'] : null;
        $this->container['callback_url'] = isset($data['callback_url']) ? $data['callback_url'] : null;
        $this->container['integration'] = isset($data['integration']) ? $data['integration'] : null;
        $this->container['team'] = isset($data['team']) ? $data['team'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['uuid']) && (mb_strlen($this->container['uuid']) < 1)) {
            $invalidProperties[] = "invalid value for 'uuid', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 255)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
        }

        if ($this->container['event_type'] === null) {
            $invalidProperties[] = "'event_type' can't be null";
        }
        $allowedValues = $this->getEventTypeAllowableValues();
        if (!is_null($this->container['event_type']) && !in_array($this->container['event_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'event_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['callback_url'] === null) {
            $invalidProperties[] = "'callback_url' can't be null";
        }
        if ((mb_strlen($this->container['callback_url']) > 2100)) {
            $invalidProperties[] = "invalid value for 'callback_url', the character length must be smaller than or equal to 2100.";
        }

        if ((mb_strlen($this->container['callback_url']) < 1)) {
            $invalidProperties[] = "invalid value for 'callback_url', the character length must be bigger than or equal to 1.";
        }

        $allowedValues = $this->getIntegrationAllowableValues();
        if (!is_null($this->container['integration']) && !in_array($this->container['integration'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'integration', must be one of '%s'",
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
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url url
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets uuid
     *
     * @return string
     */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
     * Sets uuid
     *
     * @param string $uuid uuid
     *
     * @return $this
     */
    public function setUuid($uuid)
    {

        if (!is_null($uuid) && (mb_strlen($uuid) < 1)) {
            throw new \InvalidArgumentException('invalid length for $uuid when calling WebhookSubscription., must be bigger than or equal to 1.');
        }

        $this->container['uuid'] = $uuid;

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
     * @param string $name Optional name to easily identify what webhook is used for
     *
     * @return $this
     */
    public function setName($name)
    {
        if (!is_null($name) && (mb_strlen($name) > 255)) {
            throw new \InvalidArgumentException('invalid length for $name when calling WebhookSubscription., must be smaller than or equal to 255.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets event_type
     *
     * @return string
     */
    public function getEventType()
    {
        return $this->container['event_type'];
    }

    /**
     * Sets event_type
     *
     * @param string $event_type event_type
     *
     * @return $this
     */
    public function setEventType($event_type)
    {
        $allowedValues = $this->getEventTypeAllowableValues();
        if (!in_array($event_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'event_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['event_type'] = $event_type;

        return $this;
    }

    /**
     * Gets callback_url
     *
     * @return string
     */
    public function getCallbackUrl()
    {
        return $this->container['callback_url'];
    }

    /**
     * Sets callback_url
     *
     * @param string $callback_url callback_url
     *
     * @return $this
     */
    public function setCallbackUrl($callback_url)
    {
        if ((mb_strlen($callback_url) > 2100)) {
            throw new \InvalidArgumentException('invalid length for $callback_url when calling WebhookSubscription., must be smaller than or equal to 2100.');
        }
        if ((mb_strlen($callback_url) < 1)) {
            throw new \InvalidArgumentException('invalid length for $callback_url when calling WebhookSubscription., must be bigger than or equal to 1.');
        }

        $this->container['callback_url'] = $callback_url;

        return $this;
    }

    /**
     * Gets integration
     *
     * @return string
     */
    public function getIntegration()
    {
        return $this->container['integration'];
    }

    /**
     * Sets integration
     *
     * @param string $integration integration
     *
     * @return $this
     */
    public function setIntegration($integration)
    {
        $allowedValues = $this->getIntegrationAllowableValues();
        if (!is_null($integration) && !in_array($integration, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'integration', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['integration'] = $integration;

        return $this;
    }

    /**
     * Gets team
     *
     * @return \SignRequest\Model\DocumentTeam
     */
    public function getTeam()
    {
        return $this->container['team'];
    }

    /**
     * Sets team
     *
     * @param \SignRequest\Model\DocumentTeam $team team
     *
     * @return $this
     */
    public function setTeam($team)
    {
        $this->container['team'] = $team;

        return $this;
    }

    /**
     * Gets created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param \DateTime $created created
     *
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

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

