<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Common.proto

namespace Com\Stamhe\Springboot\Common\Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>com.stamhe.springboot.common.proto.CommonReply</code>
 */
class CommonReply extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string Message = 1;</code>
     */
    private $Message = '';
    /**
     * Generated from protobuf field <code>int32 Code = 2;</code>
     */
    private $Code = 0;
    /**
     * Generated from protobuf field <code>string Data = 3;</code>
     */
    private $Data = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $Message
     *     @type int $Code
     *     @type string $Data
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string Message = 1;</code>
     * @return string
     */
    public function getMessage()
    {
        return $this->Message;
    }

    /**
     * Generated from protobuf field <code>string Message = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->Message = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 Code = 2;</code>
     * @return int
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * Generated from protobuf field <code>int32 Code = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setCode($var)
    {
        GPBUtil::checkInt32($var);
        $this->Code = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Data = 3;</code>
     * @return string
     */
    public function getData()
    {
        return $this->Data;
    }

    /**
     * Generated from protobuf field <code>string Data = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkString($var, True);
        $this->Data = $var;

        return $this;
    }

}

