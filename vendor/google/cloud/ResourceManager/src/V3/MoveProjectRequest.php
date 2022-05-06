<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/resourcemanager/v3/projects.proto

namespace Google\Cloud\ResourceManager\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request sent to
 * [MoveProject][google.cloud.resourcemanager.v3.Projects.MoveProject]
 * method.
 *
 * Generated from protobuf message <code>google.cloud.resourcemanager.v3.MoveProjectRequest</code>
 */
class MoveProjectRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the project to move.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * Required. The new parent to move the Project under.
     *
     * Generated from protobuf field <code>string destination_parent = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $destination_parent = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the project to move.
     *     @type string $destination_parent
     *           Required. The new parent to move the Project under.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Resourcemanager\V3\Projects::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the project to move.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the project to move.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Required. The new parent to move the Project under.
     *
     * Generated from protobuf field <code>string destination_parent = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getDestinationParent()
    {
        return $this->destination_parent;
    }

    /**
     * Required. The new parent to move the Project under.
     *
     * Generated from protobuf field <code>string destination_parent = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setDestinationParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->destination_parent = $var;

        return $this;
    }

}

