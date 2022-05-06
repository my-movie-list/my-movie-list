<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/admin/database/v1/common.proto

namespace Google\Cloud\Spanner\Admin\Database\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Encryption configuration for a Cloud Spanner database.
 *
 * Generated from protobuf message <code>google.spanner.admin.database.v1.EncryptionConfig</code>
 */
class EncryptionConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * The Cloud KMS key to be used for encrypting and decrypting
     * the database. Values are of the form
     * `projects/<project>/locations/<location>/keyRings/<key_ring>/cryptoKeys/<kms_key_name>`.
     *
     * Generated from protobuf field <code>string kms_key_name = 2 [(.google.api.resource_reference) = {</code>
     */
    private $kms_key_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $kms_key_name
     *           The Cloud KMS key to be used for encrypting and decrypting
     *           the database. Values are of the form
     *           `projects/<project>/locations/<location>/keyRings/<key_ring>/cryptoKeys/<kms_key_name>`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Spanner\Admin\Database\V1\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * The Cloud KMS key to be used for encrypting and decrypting
     * the database. Values are of the form
     * `projects/<project>/locations/<location>/keyRings/<key_ring>/cryptoKeys/<kms_key_name>`.
     *
     * Generated from protobuf field <code>string kms_key_name = 2 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getKmsKeyName()
    {
        return $this->kms_key_name;
    }

    /**
     * The Cloud KMS key to be used for encrypting and decrypting
     * the database. Values are of the form
     * `projects/<project>/locations/<location>/keyRings/<key_ring>/cryptoKeys/<kms_key_name>`.
     *
     * Generated from protobuf field <code>string kms_key_name = 2 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setKmsKeyName($var)
    {
        GPBUtil::checkString($var, True);
        $this->kms_key_name = $var;

        return $this;
    }

}

