<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/dataflow/v1beta3/messages.proto

namespace Google\Cloud\Dataflow\V1beta3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request to list job messages.
 * Up to max_results messages will be returned in the time range specified
 * starting with the oldest messages first. If no time range is specified
 * the results with start with the oldest message.
 *
 * Generated from protobuf message <code>google.dataflow.v1beta3.ListJobMessagesRequest</code>
 */
class ListJobMessagesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * A project id.
     *
     * Generated from protobuf field <code>string project_id = 1;</code>
     */
    private $project_id = '';
    /**
     * The job to get messages about.
     *
     * Generated from protobuf field <code>string job_id = 2;</code>
     */
    private $job_id = '';
    /**
     * Filter to only get messages with importance >= level
     *
     * Generated from protobuf field <code>.google.dataflow.v1beta3.JobMessageImportance minimum_importance = 3;</code>
     */
    private $minimum_importance = 0;
    /**
     * If specified, determines the maximum number of messages to
     * return.  If unspecified, the service may choose an appropriate
     * default, or may return an arbitrarily large number of results.
     *
     * Generated from protobuf field <code>int32 page_size = 4;</code>
     */
    private $page_size = 0;
    /**
     * If supplied, this should be the value of next_page_token returned
     * by an earlier call. This will cause the next page of results to
     * be returned.
     *
     * Generated from protobuf field <code>string page_token = 5;</code>
     */
    private $page_token = '';
    /**
     * If specified, return only messages with timestamps >= start_time.
     * The default is the job creation time (i.e. beginning of messages).
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 6;</code>
     */
    private $start_time = null;
    /**
     * Return only messages with timestamps < end_time. The default is now
     * (i.e. return up to the latest messages available).
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 7;</code>
     */
    private $end_time = null;
    /**
     * The [regional endpoint]
     * (https://cloud.google.com/dataflow/docs/concepts/regional-endpoints) that
     * contains the job specified by job_id.
     *
     * Generated from protobuf field <code>string location = 8;</code>
     */
    private $location = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $project_id
     *           A project id.
     *     @type string $job_id
     *           The job to get messages about.
     *     @type int $minimum_importance
     *           Filter to only get messages with importance >= level
     *     @type int $page_size
     *           If specified, determines the maximum number of messages to
     *           return.  If unspecified, the service may choose an appropriate
     *           default, or may return an arbitrarily large number of results.
     *     @type string $page_token
     *           If supplied, this should be the value of next_page_token returned
     *           by an earlier call. This will cause the next page of results to
     *           be returned.
     *     @type \Google\Protobuf\Timestamp $start_time
     *           If specified, return only messages with timestamps >= start_time.
     *           The default is the job creation time (i.e. beginning of messages).
     *     @type \Google\Protobuf\Timestamp $end_time
     *           Return only messages with timestamps < end_time. The default is now
     *           (i.e. return up to the latest messages available).
     *     @type string $location
     *           The [regional endpoint]
     *           (https://cloud.google.com/dataflow/docs/concepts/regional-endpoints) that
     *           contains the job specified by job_id.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Dataflow\V1Beta3\Messages::initOnce();
        parent::__construct($data);
    }

    /**
     * A project id.
     *
     * Generated from protobuf field <code>string project_id = 1;</code>
     * @return string
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * A project id.
     *
     * Generated from protobuf field <code>string project_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setProjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_id = $var;

        return $this;
    }

    /**
     * The job to get messages about.
     *
     * Generated from protobuf field <code>string job_id = 2;</code>
     * @return string
     */
    public function getJobId()
    {
        return $this->job_id;
    }

    /**
     * The job to get messages about.
     *
     * Generated from protobuf field <code>string job_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setJobId($var)
    {
        GPBUtil::checkString($var, True);
        $this->job_id = $var;

        return $this;
    }

    /**
     * Filter to only get messages with importance >= level
     *
     * Generated from protobuf field <code>.google.dataflow.v1beta3.JobMessageImportance minimum_importance = 3;</code>
     * @return int
     */
    public function getMinimumImportance()
    {
        return $this->minimum_importance;
    }

    /**
     * Filter to only get messages with importance >= level
     *
     * Generated from protobuf field <code>.google.dataflow.v1beta3.JobMessageImportance minimum_importance = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setMinimumImportance($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dataflow\V1beta3\JobMessageImportance::class);
        $this->minimum_importance = $var;

        return $this;
    }

    /**
     * If specified, determines the maximum number of messages to
     * return.  If unspecified, the service may choose an appropriate
     * default, or may return an arbitrarily large number of results.
     *
     * Generated from protobuf field <code>int32 page_size = 4;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * If specified, determines the maximum number of messages to
     * return.  If unspecified, the service may choose an appropriate
     * default, or may return an arbitrarily large number of results.
     *
     * Generated from protobuf field <code>int32 page_size = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * If supplied, this should be the value of next_page_token returned
     * by an earlier call. This will cause the next page of results to
     * be returned.
     *
     * Generated from protobuf field <code>string page_token = 5;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * If supplied, this should be the value of next_page_token returned
     * by an earlier call. This will cause the next page of results to
     * be returned.
     *
     * Generated from protobuf field <code>string page_token = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * If specified, return only messages with timestamps >= start_time.
     * The default is the job creation time (i.e. beginning of messages).
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 6;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    public function hasStartTime()
    {
        return isset($this->start_time);
    }

    public function clearStartTime()
    {
        unset($this->start_time);
    }

    /**
     * If specified, return only messages with timestamps >= start_time.
     * The default is the job creation time (i.e. beginning of messages).
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 6;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->start_time = $var;

        return $this;
    }

    /**
     * Return only messages with timestamps < end_time. The default is now
     * (i.e. return up to the latest messages available).
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 7;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    public function hasEndTime()
    {
        return isset($this->end_time);
    }

    public function clearEndTime()
    {
        unset($this->end_time);
    }

    /**
     * Return only messages with timestamps < end_time. The default is now
     * (i.e. return up to the latest messages available).
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 7;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->end_time = $var;

        return $this;
    }

    /**
     * The [regional endpoint]
     * (https://cloud.google.com/dataflow/docs/concepts/regional-endpoints) that
     * contains the job specified by job_id.
     *
     * Generated from protobuf field <code>string location = 8;</code>
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * The [regional endpoint]
     * (https://cloud.google.com/dataflow/docs/concepts/regional-endpoints) that
     * contains the job specified by job_id.
     *
     * Generated from protobuf field <code>string location = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setLocation($var)
    {
        GPBUtil::checkString($var, True);
        $this->location = $var;

        return $this;
    }

}
