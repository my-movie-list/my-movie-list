<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/custom_job.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents the spec of a worker pool in a job.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.WorkerPoolSpec</code>
 */
class WorkerPoolSpec extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Immutable. The specification of a single machine.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.MachineSpec machine_spec = 1 [(.google.api.field_behavior) = OPTIONAL, (.google.api.field_behavior) = IMMUTABLE];</code>
     */
    private $machine_spec = null;
    /**
     * Optional. The number of worker replicas to use for this worker pool.
     *
     * Generated from protobuf field <code>int64 replica_count = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $replica_count = 0;
    /**
     * Disk spec.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.DiskSpec disk_spec = 5;</code>
     */
    private $disk_spec = null;
    protected $task;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AIPlatform\V1\ContainerSpec $container_spec
     *           The custom container task.
     *     @type \Google\Cloud\AIPlatform\V1\PythonPackageSpec $python_package_spec
     *           The Python packaged task.
     *     @type \Google\Cloud\AIPlatform\V1\MachineSpec $machine_spec
     *           Optional. Immutable. The specification of a single machine.
     *     @type int|string $replica_count
     *           Optional. The number of worker replicas to use for this worker pool.
     *     @type \Google\Cloud\AIPlatform\V1\DiskSpec $disk_spec
     *           Disk spec.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\CustomJob::initOnce();
        parent::__construct($data);
    }

    /**
     * The custom container task.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ContainerSpec container_spec = 6;</code>
     * @return \Google\Cloud\AIPlatform\V1\ContainerSpec|null
     */
    public function getContainerSpec()
    {
        return $this->readOneof(6);
    }

    public function hasContainerSpec()
    {
        return $this->hasOneof(6);
    }

    /**
     * The custom container task.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ContainerSpec container_spec = 6;</code>
     * @param \Google\Cloud\AIPlatform\V1\ContainerSpec $var
     * @return $this
     */
    public function setContainerSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\ContainerSpec::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * The Python packaged task.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.PythonPackageSpec python_package_spec = 7;</code>
     * @return \Google\Cloud\AIPlatform\V1\PythonPackageSpec|null
     */
    public function getPythonPackageSpec()
    {
        return $this->readOneof(7);
    }

    public function hasPythonPackageSpec()
    {
        return $this->hasOneof(7);
    }

    /**
     * The Python packaged task.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.PythonPackageSpec python_package_spec = 7;</code>
     * @param \Google\Cloud\AIPlatform\V1\PythonPackageSpec $var
     * @return $this
     */
    public function setPythonPackageSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\PythonPackageSpec::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * Optional. Immutable. The specification of a single machine.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.MachineSpec machine_spec = 1 [(.google.api.field_behavior) = OPTIONAL, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @return \Google\Cloud\AIPlatform\V1\MachineSpec|null
     */
    public function getMachineSpec()
    {
        return $this->machine_spec;
    }

    public function hasMachineSpec()
    {
        return isset($this->machine_spec);
    }

    public function clearMachineSpec()
    {
        unset($this->machine_spec);
    }

    /**
     * Optional. Immutable. The specification of a single machine.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.MachineSpec machine_spec = 1 [(.google.api.field_behavior) = OPTIONAL, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @param \Google\Cloud\AIPlatform\V1\MachineSpec $var
     * @return $this
     */
    public function setMachineSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\MachineSpec::class);
        $this->machine_spec = $var;

        return $this;
    }

    /**
     * Optional. The number of worker replicas to use for this worker pool.
     *
     * Generated from protobuf field <code>int64 replica_count = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int|string
     */
    public function getReplicaCount()
    {
        return $this->replica_count;
    }

    /**
     * Optional. The number of worker replicas to use for this worker pool.
     *
     * Generated from protobuf field <code>int64 replica_count = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int|string $var
     * @return $this
     */
    public function setReplicaCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->replica_count = $var;

        return $this;
    }

    /**
     * Disk spec.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.DiskSpec disk_spec = 5;</code>
     * @return \Google\Cloud\AIPlatform\V1\DiskSpec|null
     */
    public function getDiskSpec()
    {
        return $this->disk_spec;
    }

    public function hasDiskSpec()
    {
        return isset($this->disk_spec);
    }

    public function clearDiskSpec()
    {
        unset($this->disk_spec);
    }

    /**
     * Disk spec.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.DiskSpec disk_spec = 5;</code>
     * @param \Google\Cloud\AIPlatform\V1\DiskSpec $var
     * @return $this
     */
    public function setDiskSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\DiskSpec::class);
        $this->disk_spec = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getTask()
    {
        return $this->whichOneof("task");
    }

}

