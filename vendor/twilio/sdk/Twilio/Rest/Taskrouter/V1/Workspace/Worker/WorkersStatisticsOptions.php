<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Taskrouter\V1\Workspace\Worker;

use Twilio\Options;
use Twilio\Values;

abstract class WorkersStatisticsOptions {
    /**
     * @param integer $minutes The minutes
     * @param \DateTime $startDate The start_date
     * @param \DateTime $endDate The end_date
     * @param string $taskQueueSid The task_queue_sid
     * @param string $taskQueueName The task_queue_name
     * @param string $friendlyName The friendly_name
     * @return FetchWorkersStatisticsOptions Options builder
     */
    public static function fetch($minutes = Values::NONE, $startDate = Values::NONE, $endDate = Values::NONE, $taskQueueSid = Values::NONE, $taskQueueName = Values::NONE, $friendlyName = Values::NONE) {
        return new FetchWorkersStatisticsOptions($minutes, $startDate, $endDate, $taskQueueSid, $taskQueueName, $friendlyName);
    }
}

class FetchWorkersStatisticsOptions extends Options {
    /**
     * @param integer $minutes The minutes
     * @param \DateTime $startDate The start_date
     * @param \DateTime $endDate The end_date
     * @param string $taskQueueSid The task_queue_sid
     * @param string $taskQueueName The task_queue_name
     * @param string $friendlyName The friendly_name
     */
    public function __construct($minutes = Values::NONE, $startDate = Values::NONE, $endDate = Values::NONE, $taskQueueSid = Values::NONE, $taskQueueName = Values::NONE, $friendlyName = Values::NONE) {
        $this->options['minutes'] = $minutes;
        $this->options['startDate'] = $startDate;
        $this->options['endDate'] = $endDate;
        $this->options['taskQueueSid'] = $taskQueueSid;
        $this->options['taskQueueName'] = $taskQueueName;
        $this->options['friendlyName'] = $friendlyName;
    }

    /**
     * The minutes
     * 
     * @param integer $minutes The minutes
     * @return $this Fluent Builder
     */
    public function setMinutes($minutes) {
        $this->options['minutes'] = $minutes;
        return $this;
    }

    /**
     * The start_date
     * 
     * @param \DateTime $startDate The start_date
     * @return $this Fluent Builder
     */
    public function setStartDate($startDate) {
        $this->options['startDate'] = $startDate;
        return $this;
    }

    /**
     * The end_date
     * 
     * @param \DateTime $endDate The end_date
     * @return $this Fluent Builder
     */
    public function setEndDate($endDate) {
        $this->options['endDate'] = $endDate;
        return $this;
    }

    /**
     * The task_queue_sid
     * 
     * @param string $taskQueueSid The task_queue_sid
     * @return $this Fluent Builder
     */
    public function setTaskQueueSid($taskQueueSid) {
        $this->options['taskQueueSid'] = $taskQueueSid;
        return $this;
    }

    /**
     * The task_queue_name
     * 
     * @param string $taskQueueName The task_queue_name
     * @return $this Fluent Builder
     */
    public function setTaskQueueName($taskQueueName) {
        $this->options['taskQueueName'] = $taskQueueName;
        return $this;
    }

    /**
     * The friendly_name
     * 
     * @param string $friendlyName The friendly_name
     * @return $this Fluent Builder
     */
    public function setFriendlyName($friendlyName) {
        $this->options['friendlyName'] = $friendlyName;
        return $this;
    }

    /**
     * Provide a friendly representation
     * 
     * @return string Machine friendly representation
     */
    public function __toString() {
        $options = array();
        foreach ($this->options as $key => $value) {
            if ($value != Values::NONE) {
                $options[] = "$key=$value";
            }
        }
        return '[Twilio.Taskrouter.V1.FetchWorkersStatisticsOptions ' . implode(' ', $options) . ']';
    }
}