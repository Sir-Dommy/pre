<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Preview\Understand;

use Twilio\Deserialize;
use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;

/**
 * PLEASE NOTE that this class contains preview products that are subject to change. Use them with caution. If you currently do not have developer preview access, please contact help@twilio.com.
 *
 * @property string $accountSid
 * @property \DateTime $dateCreated
 * @property \DateTime $dateUpdated
 * @property string $friendlyName
 * @property string $latestModelBuildSid
 * @property array $links
 * @property bool $logQueries
 * @property string $sid
 * @property string $uniqueName
 * @property string $url
 * @property string $callbackUrl
 * @property string $callbackEvents
 */
class AssistantInstance extends InstanceResource {
    protected $_fieldTypes = null;
    protected $_tasks = null;
    protected $_modelBuilds = null;
    protected $_queries = null;
    protected $_assistantFallbackActions = null;
    protected $_assistantInitiationActions = null;
    protected $_dialogues = null;
    protected $_styleSheet = null;

    /**
     * Initialize the AssistantInstance
     *
     * @param \Twilio\Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $sid A 34 character string that uniquely identifies this
     *                    resource.
     * @return \Twilio\Rest\Preview\Understand\AssistantInstance
     */
    public function __construct(Version $version, array $payload, $sid = null) {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = array(
            'accountSid' => Values::array_get($payload, 'account_sid'),
            'dateCreated' => Deserialize::dateTime(Values::array_get($payload, 'date_created')),
            'dateUpdated' => Deserialize::dateTime(Values::array_get($payload, 'date_updated')),
            'friendlyName' => Values::array_get($payload, 'friendly_name'),
            'latestModelBuildSid' => Values::array_get($payload, 'latest_model_build_sid'),
            'links' => Values::array_get($payload, 'links'),
            'logQueries' => Values::array_get($payload, 'log_queries'),
            'sid' => Values::array_get($payload, 'sid'),
            'uniqueName' => Values::array_get($payload, 'unique_name'),
            'url' => Values::array_get($payload, 'url'),
            'callbackUrl' => Values::array_get($payload, 'callback_url'),
            'callbackEvents' => Values::array_get($payload, 'callback_events'),
        );

        $this->solution = array('sid' => $sid ?: $this->properties['sid'], );
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return \Twilio\Rest\Preview\Understand\AssistantContext Context for this
     *                                                          AssistantInstance
     */
    protected function proxy() {
        if (!$this->context) {
            $this->context = new AssistantContext($this->version, $this->solution['sid']);
        }

        return $this->context;
    }

    /**
     * Fetch a AssistantInstance
     *
     * @return AssistantInstance Fetched AssistantInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch() {
        return $this->proxy()->fetch();
    }

    /**
     * Update the AssistantInstance
     *
     * @param array|Options $options Optional Arguments
     * @return AssistantInstance Updated AssistantInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update($options = array()) {
        return $this->proxy()->update($options);
    }

    /**
     * Deletes the AssistantInstance
     *
     * @return boolean True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete() {
        return $this->proxy()->delete();
    }

    /**
     * Access the fieldTypes
     *
     * @return \Twilio\Rest\Preview\Understand\Assistant\FieldTypeList
     */
    protected function getFieldTypes() {
        return $this->proxy()->fieldTypes;
    }

    /**
     * Access the tasks
     *
     * @return \Twilio\Rest\Preview\Understand\Assistant\TaskList
     */
    protected function getTasks() {
        return $this->proxy()->tasks;
    }

    /**
     * Access the modelBuilds
     *
     * @return \Twilio\Rest\Preview\Understand\Assistant\ModelBuildList
     */
    protected function getModelBuilds() {
        return $this->proxy()->modelBuilds;
    }

    /**
     * Access the queries
     *
     * @return \Twilio\Rest\Preview\Understand\Assistant\QueryList
     */
    protected function getQueries() {
        return $this->proxy()->queries;
    }

    /**
     * Access the assistantFallbackActions
     *
     * @return \Twilio\Rest\Preview\Understand\Assistant\AssistantFallbackActionsList
     */
    protected function getAssistantFallbackActions() {
        return $this->proxy()->assistantFallbackActions;
    }

    /**
     * Access the assistantInitiationActions
     *
     * @return \Twilio\Rest\Preview\Understand\Assistant\AssistantInitiationActionsList
     */
    protected function getAssistantInitiationActions() {
        return $this->proxy()->assistantInitiationActions;
    }

    /**
     * Access the dialogues
     *
     * @return \Twilio\Rest\Preview\Understand\Assistant\DialogueList
     */
    protected function getDialogues() {
        return $this->proxy()->dialogues;
    }

    /**
     * Access the styleSheet
     *
     * @return \Twilio\Rest\Preview\Understand\Assistant\StyleSheetList
     */
    protected function getStyleSheet() {
        return $this->proxy()->styleSheet;
    }

    /**
     * Magic getter to access properties
     *
     * @param string $name Property to access
     * @return mixed The requested property
     * @throws TwilioException For unknown properties
     */
    public function __get($name) {
        if (\array_key_exists($name, $this->properties)) {
            return $this->properties[$name];
        }

        if (\property_exists($this, '_' . $name)) {
            $method = 'get' . \ucfirst($name);
            return $this->$method();
        }

        throw new TwilioException('Unknown property: ' . $name);
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString() {
        $context = array();
        foreach ($this->solution as $key => $value) {
            $context[] = "$key=$value";
        }
        return '[Twilio.Preview.Understand.AssistantInstance ' . \implode(' ', $context) . ']';
    }
}