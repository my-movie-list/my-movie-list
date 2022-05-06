<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/domains/v1alpha2/domains.proto

namespace Google\Cloud\Domains\V1alpha2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response for the `SearchDomains` method.
 *
 * Generated from protobuf message <code>google.cloud.domains.v1alpha2.SearchDomainsResponse</code>
 */
class SearchDomainsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Results of the domain name search.
     *
     * Generated from protobuf field <code>repeated .google.cloud.domains.v1alpha2.RegisterParameters register_parameters = 1;</code>
     */
    private $register_parameters;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Domains\V1alpha2\RegisterParameters[]|\Google\Protobuf\Internal\RepeatedField $register_parameters
     *           Results of the domain name search.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Domains\V1Alpha2\Domains::initOnce();
        parent::__construct($data);
    }

    /**
     * Results of the domain name search.
     *
     * Generated from protobuf field <code>repeated .google.cloud.domains.v1alpha2.RegisterParameters register_parameters = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRegisterParameters()
    {
        return $this->register_parameters;
    }

    /**
     * Results of the domain name search.
     *
     * Generated from protobuf field <code>repeated .google.cloud.domains.v1alpha2.RegisterParameters register_parameters = 1;</code>
     * @param \Google\Cloud\Domains\V1alpha2\RegisterParameters[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRegisterParameters($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Domains\V1alpha2\RegisterParameters::class);
        $this->register_parameters = $arr;

        return $this;
    }

}

