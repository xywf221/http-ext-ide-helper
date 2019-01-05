<?php

namespace http;

/**
 * The HTTP client. See http\Client\Curl’s options which is the only driver currently supported.
 * Class Client
 * @package http
 */
class Client implements \SplSubject, \Countable
{
    /**
     * Debug callback’s $data contains human readable text.
     */
    const DEBUG_INFO = 0;

    /**
     * Debug callback’s $data contains data received.
     */
    const DEBUG_IN = 1;

    /**
     * Debug callback’s $data contains data sent.
     */
    const DEBUG_OUT = 2;

    /**
     * Debug callback’s $data contains headers.
     */
    const DEBUG_HEADER = 16;

    /**
     * Debug callback’s $data contains a body part.
     */
    const DEBUG_BODY = 32;

    /**
     * Debug callback’s $data contains SSL data.
     */
    const DEBUG_SSL = 64;

    /**
     * Attached observers.
     * @var \SplObjectStorage $observers
     *
     * @access private
     */
    private $observers;

    /**
     * Set options.
     * @var array $options
     *
     * @access protected
     */
    protected $options;

    /**
     * Request/response history.
     * @var Message $history
     *
     * @access protected
     */
    protected $history;

    /**
     * @var bool $recordHistory
     *
     * @access public
     */
    public $recordHistory = false;

    /**
     * Create a new HTTP client.
     * @param  string|null $driver
     * @param  string|null $persistent_handle_id
     * @return
     */
    public function __construct($driver = null, $persistent_handle_id = null)
    {

    }

    /**
     * Reset the client to the initial state.
     * @return Client
     */
    public function reset()
    {

    }

    /**
     * Add another http\Client\Request to the request queue.
     * @param Client\Request $request
     * @param  callable $callable
     * @return Client
     */
    public function enqueue($request, $callable)
    {

    }

    /**
     * Dequeue the http\Client\Request $request.
     * @param Client\Request $request
     * @return Client
     */
    public function dequeue($request)
    {

    }

    /**
     * Requeue an http\Client\Request.
     * @param Client\Request $request
     * @param  callable $callable
     * @return Client
     */
    public function requeue($request, $callable)
    {

    }

    /**
     * Implements Countable. Retrieve the number of enqueued requests.
     * @return int
     */
    public function count()
    {

    }

    /**
     * Send all enqueued requests.
     * @return Client
     */
    public function send()
    {

    }

    /**
     * Perform outstanding transfer actions.
     * @return bool
     */
    public function once()
    {

    }

    /**
     * Wait for $timeout seconds for transfers to provide data.
     * @param  mixed $timeout
     * @return bool
     */
    public function wait($timeout = 0)
    {

    }

    /**
     * Retrieve the corresponding reponse of an already finished request, or the last received response if $request is not set.
     * @param Client\Request $request
     * @return Client\Response
     */
    public function getResponse($request)
    {

    }

    /**
     * Simply returns the http\Message chain representing the request/response history.
     * @return Message
     */
    public function getHistory()
    {

    }

    /**
     * Configure the client’s low level options.
     * @param array $settings
     * @return Client
     */
    public function configure(Array $settings)
    {

    }

    /**
     * Enable sending pipelined requests to the same host if the driver supports it.
     * @param  bool $enable
     * @return Client
     */
    public function enablePipelining($enable = true)
    {

    }

    /**
     * Enable usage of an event library like libevent, which might improve performance with big socket sets.
     * @param  bool $enable
     * @return Client
     */
    public function enableEvents($enable = true)
    {

    }

    /**
     * Implements SplSubject. Notify attached observers about progress with $request.
     * @param Client\Request $request
     * @return Client
     */
    public function notify($request = null, $progress = null)
    {

    }

    /**
     * Implements SplSubject. Attach another observer.
     * @param \SplObserver $observer
     * @return Client
     */
    public function attach($observer)
    {

    }

    /**
     * Implements SplSubject. Detach $observer, which has been previously attached.
     * @param \SplObserver $observer
     * @return Client
     */
    public function detach($observer)
    {

    }

    /**
     * Returns the SplObjectStorage holding attached observers.
     * @return \SplObjectStorage
     */
    public function getObservers()
    {

    }

    /**
     * Retrieve the progress information for $request.
     * @param Client\Request $request
     * @return object
     */
    public function getProgressInfo($request)
    {

    }

    /**
     * Get transfer related informatioin for a running or finished request.
     * @param Client\Request $request
     * @return object
     */
    public function getTransferInfo($request)
    {

    }

    /**
     * Set client options.
     * @param array $options
     * @return Client
     */
    public function setOptions(Array $options = null)
    {

    }

    /**
     * Get priorly set options.
     * @return array
     */
    public function getOptions()
    {

    }

    /**
     * Specifically set SSL options.
     * @param array $ssl_option
     * @return Client
     */
    public function setSslOptions(Array $ssl_option = null)
    {

    }

    /**
     * Add specific SSL options.
     * @param array $ssl_options
     * @return Client
     */
    public function addSslOptions(Array $ssl_options = null)
    {

    }

    /**
     * Retrieve priorly set SSL options.
     * @return array
     */
    public function getSslOptions()
    {

    }

    /**
     * Set custom cookies.
     * @param array $cookies
     * @return Client
     */
    public function setCookies(Array $cookies = null)
    {

    }

    /**
     * Add custom cookies.
     * @param array $cookies
     * @return Client
     */
    public function addCookies(Array $cookies = null)
    {

    }

    /**
     * Get priorly set custom cookies.
     * @return array
     */
    public function getCookies()
    {

    }

    /**
     * List available drivers.
     * @return array
     */
    public static function getAvailableDrivers()
    {

    }

    /**
     * Retrieve a list of available request options and their default values.
     * @return array
     */
    public function getAvailableOptions()
    {

    }

    /**
     * Get a list of available configuration options and their default values.
     * @return array
     */
    public function getAvailableConfiguration()
    {

    }

    /**
     * Set client debugging callback.
     * @param  callable $callback
     * @return Client
     */
    public function setDebug($callback)
    {

    }

}

