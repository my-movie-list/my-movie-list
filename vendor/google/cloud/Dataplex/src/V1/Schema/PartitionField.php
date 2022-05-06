<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/metadata.proto

namespace Google\Cloud\Dataplex\V1\Schema;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a key field within the entity's partition structure. You could
 * have up to 20 partition fields, but only the first 10 partitions have the
 * filtering ability due to performance consideration.
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.Schema.PartitionField</code>
 */
class PartitionField extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Partition name is editable if only the partition style is not HIVE
     * compatible. The maximum length allowed is 767 characters.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $name = '';
    /**
     * Required. Immutable. The type of field.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Schema.Type type = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     */
    private $type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. Partition name is editable if only the partition style is not HIVE
     *           compatible. The maximum length allowed is 767 characters.
     *     @type int $type
     *           Required. Immutable. The type of field.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\Metadata::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Partition name is editable if only the partition style is not HIVE
     * compatible. The maximum length allowed is 767 characters.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Partition name is editable if only the partition style is not HIVE
     * compatible. The maximum length allowed is 767 characters.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Required. Immutable. The type of field.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Schema.Type type = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Required. Immutable. The type of field.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Schema.Type type = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dataplex\V1\Schema\Type::class);
        $this->type = $var;

        return $this;
    }

}


