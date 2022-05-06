<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.ForwardingRuleReference</code>
 */
class ForwardingRuleReference extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional string forwarding_rule = 269964030;</code>
     */
    private $forwarding_rule = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $forwarding_rule
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional string forwarding_rule = 269964030;</code>
     * @return string
     */
    public function getForwardingRule()
    {
        return isset($this->forwarding_rule) ? $this->forwarding_rule : '';
    }

    public function hasForwardingRule()
    {
        return isset($this->forwarding_rule);
    }

    public function clearForwardingRule()
    {
        unset($this->forwarding_rule);
    }

    /**
     * Generated from protobuf field <code>optional string forwarding_rule = 269964030;</code>
     * @param string $var
     * @return $this
     */
    public function setForwardingRule($var)
    {
        GPBUtil::checkString($var, True);
        $this->forwarding_rule = $var;

        return $this;
    }

}

