<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: request.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>key_629159437e0692991a4d3698abb8d3b1d</code>
 */
class key_629159437e0692991a4d3698abb8d3b1d extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>fixed32 key629159437e0692991a4d3698abb8d3b1d = 6;</code>
     */
    protected $key629159437e0692991a4d3698abb8d3b1d = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $key629159437e0692991a4d3698abb8d3b1d
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Request::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>fixed32 key629159437e0692991a4d3698abb8d3b1d = 6;</code>
     * @return int
     */
    public function getKey629159437E0692991A4D3698Abb8D3B1D()
    {
        return $this->key629159437e0692991a4d3698abb8d3b1d;
    }

    /**
     * Generated from protobuf field <code>fixed32 key629159437e0692991a4d3698abb8d3b1d = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setKey629159437E0692991A4D3698Abb8D3B1D($var)
    {
        GPBUtil::checkUint32($var);
        $this->key629159437e0692991a4d3698abb8d3b1d = $var;

        return $this;
    }

}

