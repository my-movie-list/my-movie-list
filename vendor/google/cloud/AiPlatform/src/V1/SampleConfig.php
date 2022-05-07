<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/data_labeling_job.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Active learning data sampling config. For every active learning labeling
 * iteration, it will select a batch of data based on the sampling strategy.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.SampleConfig</code>
 */
class SampleConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Field to choose sampling strategy. Sampling strategy will decide which data
     * should be selected for human labeling in every batch.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.SampleConfig.SampleStrategy sample_strategy = 5;</code>
     */
    private $sample_strategy = 0;
    protected $initial_batch_sample_size;
    protected $following_batch_sample_size;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $initial_batch_sample_percentage
     *           The percentage of data needed to be labeled in the first batch.
     *     @type int $following_batch_sample_percentage
     *           The percentage of data needed to be labeled in each following batch
     *           (except the first batch).
     *     @type int $sample_strategy
     *           Field to choose sampling strategy. Sampling strategy will decide which data
     *           should be selected for human labeling in every batch.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\DataLabelingJob::initOnce();
        parent::__construct($data);
    }

    /**
     * The percentage of data needed to be labeled in the first batch.
     *
     * Generated from protobuf field <code>int32 initial_batch_sample_percentage = 1;</code>
     * @return int
     */
    public function getInitialBatchSamplePercentage()
    {
        return $this->readOneof(1);
    }

    public function hasInitialBatchSamplePercentage()
    {
        return $this->hasOneof(1);
    }

    /**
     * The percentage of data needed to be labeled in the first batch.
     *
     * Generated from protobuf field <code>int32 initial_batch_sample_percentage = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setInitialBatchSamplePercentage($var)
    {
        GPBUtil::checkInt32($var);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * The percentage of data needed to be labeled in each following batch
     * (except the first batch).
     *
     * Generated from protobuf field <code>int32 following_batch_sample_percentage = 3;</code>
     * @return int
     */
    public function getFollowingBatchSamplePercentage()
    {
        return $this->readOneof(3);
    }

    public function hasFollowingBatchSamplePercentage()
    {
        return $this->hasOneof(3);
    }

    /**
     * The percentage of data needed to be labeled in each following batch
     * (except the first batch).
     *
     * Generated from protobuf field <code>int32 following_batch_sample_percentage = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setFollowingBatchSamplePercentage($var)
    {
        GPBUtil::checkInt32($var);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Field to choose sampling strategy. Sampling strategy will decide which data
     * should be selected for human labeling in every batch.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.SampleConfig.SampleStrategy sample_strategy = 5;</code>
     * @return int
     */
    public function getSampleStrategy()
    {
        return $this->sample_strategy;
    }

    /**
     * Field to choose sampling strategy. Sampling strategy will decide which data
     * should be selected for human labeling in every batch.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.SampleConfig.SampleStrategy sample_strategy = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setSampleStrategy($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\AIPlatform\V1\SampleConfig\SampleStrategy::class);
        $this->sample_strategy = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getInitialBatchSampleSize()
    {
        return $this->whichOneof("initial_batch_sample_size");
    }

    /**
     * @return string
     */
    public function getFollowingBatchSampleSize()
    {
        return $this->whichOneof("following_batch_sample_size");
    }

}
