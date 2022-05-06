<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/alert.proto

namespace Google\Cloud\Monitoring\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A description of the conditions under which some aspect of your system is
 * considered to be "unhealthy" and the ways to notify people or services about
 * this state. For an overview of alert policies, see
 * [Introduction to Alerting](https://cloud.google.com/monitoring/alerts/).
 *
 * Generated from protobuf message <code>google.monitoring.v3.AlertPolicy</code>
 */
class AlertPolicy extends \Google\Protobuf\Internal\Message
{
    /**
     * Required if the policy exists. The resource name for this policy. The
     * format is:
     *     projects/[PROJECT_ID_OR_NUMBER]/alertPolicies/[ALERT_POLICY_ID]
     * `[ALERT_POLICY_ID]` is assigned by Stackdriver Monitoring when the policy
     * is created. When calling the
     * [alertPolicies.create][google.monitoring.v3.AlertPolicyService.CreateAlertPolicy]
     * method, do not include the `name` field in the alerting policy passed as
     * part of the request.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * A short name or phrase used to identify the policy in dashboards,
     * notifications, and incidents. To avoid confusion, don't use the same
     * display name for multiple policies in the same project. The name is
     * limited to 512 Unicode characters.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     */
    private $display_name = '';
    /**
     * Documentation that is included with notifications and incidents related to
     * this policy. Best practice is for the documentation to include information
     * to help responders understand, mitigate, escalate, and correct the
     * underlying problems detected by the alerting policy. Notification channels
     * that have limited capacity might not show this documentation.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.AlertPolicy.Documentation documentation = 13;</code>
     */
    private $documentation = null;
    /**
     * User-supplied key/value data to be used for organizing and
     * identifying the `AlertPolicy` objects.
     * The field can contain up to 64 entries. Each key and value is limited to
     * 63 Unicode characters or 128 bytes, whichever is smaller. Labels and
     * values can contain only lowercase letters, numerals, underscores, and
     * dashes. Keys must begin with a letter.
     *
     * Generated from protobuf field <code>map<string, string> user_labels = 16;</code>
     */
    private $user_labels;
    /**
     * A list of conditions for the policy. The conditions are combined by AND or
     * OR according to the `combiner` field. If the combined conditions evaluate
     * to true, then an incident is created. A policy can have from one to six
     * conditions.
     * If `condition_time_series_query_language` is present, it must be the only
     * `condition`.
     *
     * Generated from protobuf field <code>repeated .google.monitoring.v3.AlertPolicy.Condition conditions = 12;</code>
     */
    private $conditions;
    /**
     * How to combine the results of multiple conditions to determine if an
     * incident should be opened.
     * If `condition_time_series_query_language` is present, this must be
     * `COMBINE_UNSPECIFIED`.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.AlertPolicy.ConditionCombinerType combiner = 6;</code>
     */
    private $combiner = 0;
    /**
     * Whether or not the policy is enabled. On write, the default interpretation
     * if unset is that the policy is enabled. On read, clients should not make
     * any assumption about the state if it has not been populated. The
     * field should always be populated on List and Get operations, unless
     * a field projection has been specified that strips it out.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue enabled = 17;</code>
     */
    private $enabled = null;
    /**
     * Read-only description of how the alert policy is invalid. OK if the alert
     * policy is valid. If not OK, the alert policy will not generate incidents.
     *
     * Generated from protobuf field <code>.google.rpc.Status validity = 18;</code>
     */
    private $validity = null;
    /**
     * Identifies the notification channels to which notifications should be sent
     * when incidents are opened or closed or when new violations occur on
     * an already opened incident. Each element of this array corresponds to
     * the `name` field in each of the
     * [`NotificationChannel`][google.monitoring.v3.NotificationChannel]
     * objects that are returned from the [`ListNotificationChannels`]
     * [google.monitoring.v3.NotificationChannelService.ListNotificationChannels]
     * method. The format of the entries in this field is:
     *     projects/[PROJECT_ID_OR_NUMBER]/notificationChannels/[CHANNEL_ID]
     *
     * Generated from protobuf field <code>repeated string notification_channels = 14;</code>
     */
    private $notification_channels;
    /**
     * A read-only record of the creation of the alerting policy. If provided
     * in a call to create or update, this field will be ignored.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.MutationRecord creation_record = 10;</code>
     */
    private $creation_record = null;
    /**
     * A read-only record of the most recent change to the alerting policy. If
     * provided in a call to create or update, this field will be ignored.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.MutationRecord mutation_record = 11;</code>
     */
    private $mutation_record = null;
    /**
     * Control over how this alert policy's notification channels are notified.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.AlertPolicy.AlertStrategy alert_strategy = 21;</code>
     */
    private $alert_strategy = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required if the policy exists. The resource name for this policy. The
     *           format is:
     *               projects/[PROJECT_ID_OR_NUMBER]/alertPolicies/[ALERT_POLICY_ID]
     *           `[ALERT_POLICY_ID]` is assigned by Stackdriver Monitoring when the policy
     *           is created. When calling the
     *           [alertPolicies.create][google.monitoring.v3.AlertPolicyService.CreateAlertPolicy]
     *           method, do not include the `name` field in the alerting policy passed as
     *           part of the request.
     *     @type string $display_name
     *           A short name or phrase used to identify the policy in dashboards,
     *           notifications, and incidents. To avoid confusion, don't use the same
     *           display name for multiple policies in the same project. The name is
     *           limited to 512 Unicode characters.
     *     @type \Google\Cloud\Monitoring\V3\AlertPolicy\Documentation $documentation
     *           Documentation that is included with notifications and incidents related to
     *           this policy. Best practice is for the documentation to include information
     *           to help responders understand, mitigate, escalate, and correct the
     *           underlying problems detected by the alerting policy. Notification channels
     *           that have limited capacity might not show this documentation.
     *     @type array|\Google\Protobuf\Internal\MapField $user_labels
     *           User-supplied key/value data to be used for organizing and
     *           identifying the `AlertPolicy` objects.
     *           The field can contain up to 64 entries. Each key and value is limited to
     *           63 Unicode characters or 128 bytes, whichever is smaller. Labels and
     *           values can contain only lowercase letters, numerals, underscores, and
     *           dashes. Keys must begin with a letter.
     *     @type \Google\Cloud\Monitoring\V3\AlertPolicy\Condition[]|\Google\Protobuf\Internal\RepeatedField $conditions
     *           A list of conditions for the policy. The conditions are combined by AND or
     *           OR according to the `combiner` field. If the combined conditions evaluate
     *           to true, then an incident is created. A policy can have from one to six
     *           conditions.
     *           If `condition_time_series_query_language` is present, it must be the only
     *           `condition`.
     *     @type int $combiner
     *           How to combine the results of multiple conditions to determine if an
     *           incident should be opened.
     *           If `condition_time_series_query_language` is present, this must be
     *           `COMBINE_UNSPECIFIED`.
     *     @type \Google\Protobuf\BoolValue $enabled
     *           Whether or not the policy is enabled. On write, the default interpretation
     *           if unset is that the policy is enabled. On read, clients should not make
     *           any assumption about the state if it has not been populated. The
     *           field should always be populated on List and Get operations, unless
     *           a field projection has been specified that strips it out.
     *     @type \Google\Rpc\Status $validity
     *           Read-only description of how the alert policy is invalid. OK if the alert
     *           policy is valid. If not OK, the alert policy will not generate incidents.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $notification_channels
     *           Identifies the notification channels to which notifications should be sent
     *           when incidents are opened or closed or when new violations occur on
     *           an already opened incident. Each element of this array corresponds to
     *           the `name` field in each of the
     *           [`NotificationChannel`][google.monitoring.v3.NotificationChannel]
     *           objects that are returned from the [`ListNotificationChannels`]
     *           [google.monitoring.v3.NotificationChannelService.ListNotificationChannels]
     *           method. The format of the entries in this field is:
     *               projects/[PROJECT_ID_OR_NUMBER]/notificationChannels/[CHANNEL_ID]
     *     @type \Google\Cloud\Monitoring\V3\MutationRecord $creation_record
     *           A read-only record of the creation of the alerting policy. If provided
     *           in a call to create or update, this field will be ignored.
     *     @type \Google\Cloud\Monitoring\V3\MutationRecord $mutation_record
     *           A read-only record of the most recent change to the alerting policy. If
     *           provided in a call to create or update, this field will be ignored.
     *     @type \Google\Cloud\Monitoring\V3\AlertPolicy\AlertStrategy $alert_strategy
     *           Control over how this alert policy's notification channels are notified.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Monitoring\V3\Alert::initOnce();
        parent::__construct($data);
    }

    /**
     * Required if the policy exists. The resource name for this policy. The
     * format is:
     *     projects/[PROJECT_ID_OR_NUMBER]/alertPolicies/[ALERT_POLICY_ID]
     * `[ALERT_POLICY_ID]` is assigned by Stackdriver Monitoring when the policy
     * is created. When calling the
     * [alertPolicies.create][google.monitoring.v3.AlertPolicyService.CreateAlertPolicy]
     * method, do not include the `name` field in the alerting policy passed as
     * part of the request.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required if the policy exists. The resource name for this policy. The
     * format is:
     *     projects/[PROJECT_ID_OR_NUMBER]/alertPolicies/[ALERT_POLICY_ID]
     * `[ALERT_POLICY_ID]` is assigned by Stackdriver Monitoring when the policy
     * is created. When calling the
     * [alertPolicies.create][google.monitoring.v3.AlertPolicyService.CreateAlertPolicy]
     * method, do not include the `name` field in the alerting policy passed as
     * part of the request.
     *
     * Generated from protobuf field <code>string name = 1;</code>
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
     * A short name or phrase used to identify the policy in dashboards,
     * notifications, and incidents. To avoid confusion, don't use the same
     * display name for multiple policies in the same project. The name is
     * limited to 512 Unicode characters.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * A short name or phrase used to identify the policy in dashboards,
     * notifications, and incidents. To avoid confusion, don't use the same
     * display name for multiple policies in the same project. The name is
     * limited to 512 Unicode characters.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Documentation that is included with notifications and incidents related to
     * this policy. Best practice is for the documentation to include information
     * to help responders understand, mitigate, escalate, and correct the
     * underlying problems detected by the alerting policy. Notification channels
     * that have limited capacity might not show this documentation.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.AlertPolicy.Documentation documentation = 13;</code>
     * @return \Google\Cloud\Monitoring\V3\AlertPolicy\Documentation|null
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }

    public function hasDocumentation()
    {
        return isset($this->documentation);
    }

    public function clearDocumentation()
    {
        unset($this->documentation);
    }

    /**
     * Documentation that is included with notifications and incidents related to
     * this policy. Best practice is for the documentation to include information
     * to help responders understand, mitigate, escalate, and correct the
     * underlying problems detected by the alerting policy. Notification channels
     * that have limited capacity might not show this documentation.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.AlertPolicy.Documentation documentation = 13;</code>
     * @param \Google\Cloud\Monitoring\V3\AlertPolicy\Documentation $var
     * @return $this
     */
    public function setDocumentation($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Monitoring\V3\AlertPolicy\Documentation::class);
        $this->documentation = $var;

        return $this;
    }

    /**
     * User-supplied key/value data to be used for organizing and
     * identifying the `AlertPolicy` objects.
     * The field can contain up to 64 entries. Each key and value is limited to
     * 63 Unicode characters or 128 bytes, whichever is smaller. Labels and
     * values can contain only lowercase letters, numerals, underscores, and
     * dashes. Keys must begin with a letter.
     *
     * Generated from protobuf field <code>map<string, string> user_labels = 16;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getUserLabels()
    {
        return $this->user_labels;
    }

    /**
     * User-supplied key/value data to be used for organizing and
     * identifying the `AlertPolicy` objects.
     * The field can contain up to 64 entries. Each key and value is limited to
     * 63 Unicode characters or 128 bytes, whichever is smaller. Labels and
     * values can contain only lowercase letters, numerals, underscores, and
     * dashes. Keys must begin with a letter.
     *
     * Generated from protobuf field <code>map<string, string> user_labels = 16;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setUserLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->user_labels = $arr;

        return $this;
    }

    /**
     * A list of conditions for the policy. The conditions are combined by AND or
     * OR according to the `combiner` field. If the combined conditions evaluate
     * to true, then an incident is created. A policy can have from one to six
     * conditions.
     * If `condition_time_series_query_language` is present, it must be the only
     * `condition`.
     *
     * Generated from protobuf field <code>repeated .google.monitoring.v3.AlertPolicy.Condition conditions = 12;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getConditions()
    {
        return $this->conditions;
    }

    /**
     * A list of conditions for the policy. The conditions are combined by AND or
     * OR according to the `combiner` field. If the combined conditions evaluate
     * to true, then an incident is created. A policy can have from one to six
     * conditions.
     * If `condition_time_series_query_language` is present, it must be the only
     * `condition`.
     *
     * Generated from protobuf field <code>repeated .google.monitoring.v3.AlertPolicy.Condition conditions = 12;</code>
     * @param \Google\Cloud\Monitoring\V3\AlertPolicy\Condition[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setConditions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Monitoring\V3\AlertPolicy\Condition::class);
        $this->conditions = $arr;

        return $this;
    }

    /**
     * How to combine the results of multiple conditions to determine if an
     * incident should be opened.
     * If `condition_time_series_query_language` is present, this must be
     * `COMBINE_UNSPECIFIED`.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.AlertPolicy.ConditionCombinerType combiner = 6;</code>
     * @return int
     */
    public function getCombiner()
    {
        return $this->combiner;
    }

    /**
     * How to combine the results of multiple conditions to determine if an
     * incident should be opened.
     * If `condition_time_series_query_language` is present, this must be
     * `COMBINE_UNSPECIFIED`.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.AlertPolicy.ConditionCombinerType combiner = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setCombiner($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Monitoring\V3\AlertPolicy\ConditionCombinerType::class);
        $this->combiner = $var;

        return $this;
    }

    /**
     * Whether or not the policy is enabled. On write, the default interpretation
     * if unset is that the policy is enabled. On read, clients should not make
     * any assumption about the state if it has not been populated. The
     * field should always be populated on List and Get operations, unless
     * a field projection has been specified that strips it out.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue enabled = 17;</code>
     * @return \Google\Protobuf\BoolValue|null
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    public function hasEnabled()
    {
        return isset($this->enabled);
    }

    public function clearEnabled()
    {
        unset($this->enabled);
    }

    /**
     * Returns the unboxed value from <code>getEnabled()</code>

     * Whether or not the policy is enabled. On write, the default interpretation
     * if unset is that the policy is enabled. On read, clients should not make
     * any assumption about the state if it has not been populated. The
     * field should always be populated on List and Get operations, unless
     * a field projection has been specified that strips it out.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue enabled = 17;</code>
     * @return bool|null
     */
    public function getEnabledValue()
    {
        return $this->readWrapperValue("enabled");
    }

    /**
     * Whether or not the policy is enabled. On write, the default interpretation
     * if unset is that the policy is enabled. On read, clients should not make
     * any assumption about the state if it has not been populated. The
     * field should always be populated on List and Get operations, unless
     * a field projection has been specified that strips it out.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue enabled = 17;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setEnabled($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->enabled = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BoolValue object.

     * Whether or not the policy is enabled. On write, the default interpretation
     * if unset is that the policy is enabled. On read, clients should not make
     * any assumption about the state if it has not been populated. The
     * field should always be populated on List and Get operations, unless
     * a field projection has been specified that strips it out.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue enabled = 17;</code>
     * @param bool|null $var
     * @return $this
     */
    public function setEnabledValue($var)
    {
        $this->writeWrapperValue("enabled", $var);
        return $this;}

    /**
     * Read-only description of how the alert policy is invalid. OK if the alert
     * policy is valid. If not OK, the alert policy will not generate incidents.
     *
     * Generated from protobuf field <code>.google.rpc.Status validity = 18;</code>
     * @return \Google\Rpc\Status|null
     */
    public function getValidity()
    {
        return $this->validity;
    }

    public function hasValidity()
    {
        return isset($this->validity);
    }

    public function clearValidity()
    {
        unset($this->validity);
    }

    /**
     * Read-only description of how the alert policy is invalid. OK if the alert
     * policy is valid. If not OK, the alert policy will not generate incidents.
     *
     * Generated from protobuf field <code>.google.rpc.Status validity = 18;</code>
     * @param \Google\Rpc\Status $var
     * @return $this
     */
    public function setValidity($var)
    {
        GPBUtil::checkMessage($var, \Google\Rpc\Status::class);
        $this->validity = $var;

        return $this;
    }

    /**
     * Identifies the notification channels to which notifications should be sent
     * when incidents are opened or closed or when new violations occur on
     * an already opened incident. Each element of this array corresponds to
     * the `name` field in each of the
     * [`NotificationChannel`][google.monitoring.v3.NotificationChannel]
     * objects that are returned from the [`ListNotificationChannels`]
     * [google.monitoring.v3.NotificationChannelService.ListNotificationChannels]
     * method. The format of the entries in this field is:
     *     projects/[PROJECT_ID_OR_NUMBER]/notificationChannels/[CHANNEL_ID]
     *
     * Generated from protobuf field <code>repeated string notification_channels = 14;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNotificationChannels()
    {
        return $this->notification_channels;
    }

    /**
     * Identifies the notification channels to which notifications should be sent
     * when incidents are opened or closed or when new violations occur on
     * an already opened incident. Each element of this array corresponds to
     * the `name` field in each of the
     * [`NotificationChannel`][google.monitoring.v3.NotificationChannel]
     * objects that are returned from the [`ListNotificationChannels`]
     * [google.monitoring.v3.NotificationChannelService.ListNotificationChannels]
     * method. The format of the entries in this field is:
     *     projects/[PROJECT_ID_OR_NUMBER]/notificationChannels/[CHANNEL_ID]
     *
     * Generated from protobuf field <code>repeated string notification_channels = 14;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNotificationChannels($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->notification_channels = $arr;

        return $this;
    }

    /**
     * A read-only record of the creation of the alerting policy. If provided
     * in a call to create or update, this field will be ignored.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.MutationRecord creation_record = 10;</code>
     * @return \Google\Cloud\Monitoring\V3\MutationRecord|null
     */
    public function getCreationRecord()
    {
        return $this->creation_record;
    }

    public function hasCreationRecord()
    {
        return isset($this->creation_record);
    }

    public function clearCreationRecord()
    {
        unset($this->creation_record);
    }

    /**
     * A read-only record of the creation of the alerting policy. If provided
     * in a call to create or update, this field will be ignored.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.MutationRecord creation_record = 10;</code>
     * @param \Google\Cloud\Monitoring\V3\MutationRecord $var
     * @return $this
     */
    public function setCreationRecord($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Monitoring\V3\MutationRecord::class);
        $this->creation_record = $var;

        return $this;
    }

    /**
     * A read-only record of the most recent change to the alerting policy. If
     * provided in a call to create or update, this field will be ignored.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.MutationRecord mutation_record = 11;</code>
     * @return \Google\Cloud\Monitoring\V3\MutationRecord|null
     */
    public function getMutationRecord()
    {
        return $this->mutation_record;
    }

    public function hasMutationRecord()
    {
        return isset($this->mutation_record);
    }

    public function clearMutationRecord()
    {
        unset($this->mutation_record);
    }

    /**
     * A read-only record of the most recent change to the alerting policy. If
     * provided in a call to create or update, this field will be ignored.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.MutationRecord mutation_record = 11;</code>
     * @param \Google\Cloud\Monitoring\V3\MutationRecord $var
     * @return $this
     */
    public function setMutationRecord($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Monitoring\V3\MutationRecord::class);
        $this->mutation_record = $var;

        return $this;
    }

    /**
     * Control over how this alert policy's notification channels are notified.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.AlertPolicy.AlertStrategy alert_strategy = 21;</code>
     * @return \Google\Cloud\Monitoring\V3\AlertPolicy\AlertStrategy|null
     */
    public function getAlertStrategy()
    {
        return $this->alert_strategy;
    }

    public function hasAlertStrategy()
    {
        return isset($this->alert_strategy);
    }

    public function clearAlertStrategy()
    {
        unset($this->alert_strategy);
    }

    /**
     * Control over how this alert policy's notification channels are notified.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.AlertPolicy.AlertStrategy alert_strategy = 21;</code>
     * @param \Google\Cloud\Monitoring\V3\AlertPolicy\AlertStrategy $var
     * @return $this
     */
    public function setAlertStrategy($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Monitoring\V3\AlertPolicy\AlertStrategy::class);
        $this->alert_strategy = $var;

        return $this;
    }

}

