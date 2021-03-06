<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: response.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>video_info</code>
 */
class video_info extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string video_id = 1;</code>
     */
    protected $video_id = '';
    /**
     * Generated from protobuf field <code>string tittle = 15;</code>
     */
    protected $tittle = '';
    /**
     * Generated from protobuf field <code>int32 duration = 16;</code>
     */
    protected $duration = 0;
    /**
     * Generated from protobuf field <code>string id = 19;</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>string description = 21;</code>
     */
    protected $description = '';
    /**
     * Generated from protobuf field <code>string subscribers = 32;</code>
     */
    protected $subscribers = '';
    /**
     * Generated from protobuf field <code>string channel = 33;</code>
     */
    protected $channel = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $video_id
     *     @type string $tittle
     *     @type int $duration
     *     @type string $id
     *     @type string $description
     *     @type string $subscribers
     *     @type string $channel
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Response::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string video_id = 1;</code>
     * @return string
     */
    public function getVideoId()
    {
        return $this->video_id;
    }

    /**
     * Generated from protobuf field <code>string video_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setVideoId($var)
    {
        GPBUtil::checkString($var, True);
        $this->video_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string tittle = 15;</code>
     * @return string
     */
    public function getTittle()
    {
        return $this->tittle;
    }

    /**
     * Generated from protobuf field <code>string tittle = 15;</code>
     * @param string $var
     * @return $this
     */
    public function setTittle($var)
    {
        GPBUtil::checkString($var, True);
        $this->tittle = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 duration = 16;</code>
     * @return int
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Generated from protobuf field <code>int32 duration = 16;</code>
     * @param int $var
     * @return $this
     */
    public function setDuration($var)
    {
        GPBUtil::checkInt32($var);
        $this->duration = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string id = 19;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>string id = 19;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string description = 21;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Generated from protobuf field <code>string description = 21;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string subscribers = 32;</code>
     * @return string
     */
    public function getSubscribers()
    {
        return $this->subscribers;
    }

    /**
     * Generated from protobuf field <code>string subscribers = 32;</code>
     * @param string $var
     * @return $this
     */
    public function setSubscribers($var)
    {
        GPBUtil::checkString($var, True);
        $this->subscribers = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string channel = 33;</code>
     * @return string
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * Generated from protobuf field <code>string channel = 33;</code>
     * @param string $var
     * @return $this
     */
    public function setChannel($var)
    {
        GPBUtil::checkString($var, True);
        $this->channel = $var;

        return $this;
    }

}

