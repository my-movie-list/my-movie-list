<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\Firewall;

use UnexpectedValueException;

/**
 * Direction of traffic to which this firewall applies, either `INGRESS` or `EGRESS`. The default is `INGRESS`. For `INGRESS` traffic, you cannot specify the destinationRanges field, and for `EGRESS` traffic, you cannot specify the sourceRanges or sourceTags fields.
 *
 * Protobuf type <code>google.cloud.compute.v1.Firewall.Direction</code>
 */
class Direction
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_DIRECTION = 0;</code>
     */
    const UNDEFINED_DIRECTION = 0;
    /**
     * Indicates that firewall should apply to outgoing traffic.
     *
     * Generated from protobuf enum <code>EGRESS = 432880501;</code>
     */
    const EGRESS = 432880501;
    /**
     * Indicates that firewall should apply to incoming traffic.
     *
     * Generated from protobuf enum <code>INGRESS = 516931221;</code>
     */
    const INGRESS = 516931221;

    private static $valueToName = [
        self::UNDEFINED_DIRECTION => 'UNDEFINED_DIRECTION',
        self::EGRESS => 'EGRESS',
        self::INGRESS => 'INGRESS',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

