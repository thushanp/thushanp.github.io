<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Chat\V2\Service;

use Twilio\Options;
use Twilio\Values;

abstract class ChannelOptions {
    /**
     * @param string $friendlyName The friendly_name
     * @param string $uniqueName The unique_name
     * @param string $attributes The attributes
     * @param string $type The type
     * @return CreateChannelOptions Options builder
     */
    public static function create($friendlyName = Values::NONE, $uniqueName = Values::NONE, $attributes = Values::NONE, $type = Values::NONE) {
        return new CreateChannelOptions($friendlyName, $uniqueName, $attributes, $type);
    }

    /**
     * @param string $type The type
     * @return ReadChannelOptions Options builder
     */
    public static function read($type = Values::NONE) {
        return new ReadChannelOptions($type);
    }

    /**
     * @param string $friendlyName The friendly_name
     * @param string $uniqueName The unique_name
     * @param string $attributes The attributes
     * @return UpdateChannelOptions Options builder
     */
    public static function update($friendlyName = Values::NONE, $uniqueName = Values::NONE, $attributes = Values::NONE) {
        return new UpdateChannelOptions($friendlyName, $uniqueName, $attributes);
    }
}

class CreateChannelOptions extends Options {
    /**
     * @param string $friendlyName The friendly_name
     * @param string $uniqueName The unique_name
     * @param string $attributes The attributes
     * @param string $type The type
     */
    public function __construct($friendlyName = Values::NONE, $uniqueName = Values::NONE, $attributes = Values::NONE, $type = Values::NONE) {
        $this->options['friendlyName'] = $friendlyName;
        $this->options['uniqueName'] = $uniqueName;
        $this->options['attributes'] = $attributes;
        $this->options['type'] = $type;
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
     * The unique_name
     * 
     * @param string $uniqueName The unique_name
     * @return $this Fluent Builder
     */
    public function setUniqueName($uniqueName) {
        $this->options['uniqueName'] = $uniqueName;
        return $this;
    }

    /**
     * The attributes
     * 
     * @param string $attributes The attributes
     * @return $this Fluent Builder
     */
    public function setAttributes($attributes) {
        $this->options['attributes'] = $attributes;
        return $this;
    }

    /**
     * The type
     * 
     * @param string $type The type
     * @return $this Fluent Builder
     */
    public function setType($type) {
        $this->options['type'] = $type;
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
        return '[Twilio.Chat.V2.CreateChannelOptions ' . implode(' ', $options) . ']';
    }
}

class ReadChannelOptions extends Options {
    /**
     * @param string $type The type
     */
    public function __construct($type = Values::NONE) {
        $this->options['type'] = $type;
    }

    /**
     * The type
     * 
     * @param string $type The type
     * @return $this Fluent Builder
     */
    public function setType($type) {
        $this->options['type'] = $type;
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
        return '[Twilio.Chat.V2.ReadChannelOptions ' . implode(' ', $options) . ']';
    }
}

class UpdateChannelOptions extends Options {
    /**
     * @param string $friendlyName The friendly_name
     * @param string $uniqueName The unique_name
     * @param string $attributes The attributes
     */
    public function __construct($friendlyName = Values::NONE, $uniqueName = Values::NONE, $attributes = Values::NONE) {
        $this->options['friendlyName'] = $friendlyName;
        $this->options['uniqueName'] = $uniqueName;
        $this->options['attributes'] = $attributes;
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
     * The unique_name
     * 
     * @param string $uniqueName The unique_name
     * @return $this Fluent Builder
     */
    public function setUniqueName($uniqueName) {
        $this->options['uniqueName'] = $uniqueName;
        return $this;
    }

    /**
     * The attributes
     * 
     * @param string $attributes The attributes
     * @return $this Fluent Builder
     */
    public function setAttributes($attributes) {
        $this->options['attributes'] = $attributes;
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
        return '[Twilio.Chat.V2.UpdateChannelOptions ' . implode(' ', $options) . ']';
    }
}