<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/retail/v2/user_event.proto

namespace Google\Cloud\Retail\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Detailed completion information including completion attribution token and
 * clicked completion info.
 *
 * Generated from protobuf message <code>google.cloud.retail.v2.CompletionDetail</code>
 */
class CompletionDetail extends \Google\Protobuf\Internal\Message
{
    /**
     * Completion attribution token in
     * [CompleteQueryResponse.attribution_token][google.cloud.retail.v2.CompleteQueryResponse.attribution_token].
     *
     * Generated from protobuf field <code>string completion_attribution_token = 1;</code>
     */
    private $completion_attribution_token = '';
    /**
     * End user selected
     * [CompleteQueryResponse.CompletionResult.suggestion][google.cloud.retail.v2.CompleteQueryResponse.CompletionResult.suggestion].
     *
     * Generated from protobuf field <code>string selected_suggestion = 2;</code>
     */
    private $selected_suggestion = '';
    /**
     * End user selected
     * [CompleteQueryResponse.CompletionResult.suggestion][google.cloud.retail.v2.CompleteQueryResponse.CompletionResult.suggestion]
     * position, starting from 0.
     *
     * Generated from protobuf field <code>int32 selected_position = 3;</code>
     */
    private $selected_position = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $completion_attribution_token
     *           Completion attribution token in
     *           [CompleteQueryResponse.attribution_token][google.cloud.retail.v2.CompleteQueryResponse.attribution_token].
     *     @type string $selected_suggestion
     *           End user selected
     *           [CompleteQueryResponse.CompletionResult.suggestion][google.cloud.retail.v2.CompleteQueryResponse.CompletionResult.suggestion].
     *     @type int $selected_position
     *           End user selected
     *           [CompleteQueryResponse.CompletionResult.suggestion][google.cloud.retail.v2.CompleteQueryResponse.CompletionResult.suggestion]
     *           position, starting from 0.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Retail\V2\UserEvent::initOnce();
        parent::__construct($data);
    }

    /**
     * Completion attribution token in
     * [CompleteQueryResponse.attribution_token][google.cloud.retail.v2.CompleteQueryResponse.attribution_token].
     *
     * Generated from protobuf field <code>string completion_attribution_token = 1;</code>
     * @return string
     */
    public function getCompletionAttributionToken()
    {
        return $this->completion_attribution_token;
    }

    /**
     * Completion attribution token in
     * [CompleteQueryResponse.attribution_token][google.cloud.retail.v2.CompleteQueryResponse.attribution_token].
     *
     * Generated from protobuf field <code>string completion_attribution_token = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCompletionAttributionToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->completion_attribution_token = $var;

        return $this;
    }

    /**
     * End user selected
     * [CompleteQueryResponse.CompletionResult.suggestion][google.cloud.retail.v2.CompleteQueryResponse.CompletionResult.suggestion].
     *
     * Generated from protobuf field <code>string selected_suggestion = 2;</code>
     * @return string
     */
    public function getSelectedSuggestion()
    {
        return $this->selected_suggestion;
    }

    /**
     * End user selected
     * [CompleteQueryResponse.CompletionResult.suggestion][google.cloud.retail.v2.CompleteQueryResponse.CompletionResult.suggestion].
     *
     * Generated from protobuf field <code>string selected_suggestion = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSelectedSuggestion($var)
    {
        GPBUtil::checkString($var, True);
        $this->selected_suggestion = $var;

        return $this;
    }

    /**
     * End user selected
     * [CompleteQueryResponse.CompletionResult.suggestion][google.cloud.retail.v2.CompleteQueryResponse.CompletionResult.suggestion]
     * position, starting from 0.
     *
     * Generated from protobuf field <code>int32 selected_position = 3;</code>
     * @return int
     */
    public function getSelectedPosition()
    {
        return $this->selected_position;
    }

    /**
     * End user selected
     * [CompleteQueryResponse.CompletionResult.suggestion][google.cloud.retail.v2.CompleteQueryResponse.CompletionResult.suggestion]
     * position, starting from 0.
     *
     * Generated from protobuf field <code>int32 selected_position = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setSelectedPosition($var)
    {
        GPBUtil::checkInt32($var);
        $this->selected_position = $var;

        return $this;
    }

}
