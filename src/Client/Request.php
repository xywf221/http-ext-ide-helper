<?php

namespace http\Client;

use http\Message\Body;

/**
 * Class Request
 * @package http\Client
 */
class Request extends \http\Message implements \Traversable, \Iterator, \Serializable, \Countable
{

    /**
     * Create a new client request message to be enqueued and sent by http\Client.
     * @param  string $method
     * @param  string $url
     * @param array $headers
     * @param Body $body
     * @return void
     */
    public function __construct($method = null, $url, Array $headers = null, $body = null)
    {

    }

    /**
     * Add querystring data.
     * @var mixed $query_data
     * @return  Request
     */
    public function addQuery($query_data)
    {

    }

    /**
     * Add specific SSL options.
     * @param array $ssl_options
     * @return Request
     */
    public function addSslOptions($ssl_options = null)
    {

    }

    /**
     * Extract the currently set “Content-Type” header.
     * @return string
     */
    public function getContentType()
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
     * Retrieve the currently set querystring.
     * @return  string
     */
    public function getQuery()
    {

    }

    /**
     * Retrieve the currently set querystring.
     * @return  string
     */
    public function getSslOptions()
    {

    }

    /**
     * Set the MIME content type of the request message.
     * @var string $content_type
     * @return Request
     */
    public function setContentType($content_type)
    {

    }

    /**
     * Set client options.
     * @var array $options
     * @return Request
     */
    public function setOptions($options = null)
    {

    }

    /**
     * (Re)set the querystring.
     * @param array $query_data
     * @return  Request
     */
    public function setQuery($query_data = null)
    {

    }

    /**
     * Specifically set SSL options.
     * @param array $ssl_options
     * @return Request
     */
    public function setSslOptions($ssl_options = null)
    {

    }
}

