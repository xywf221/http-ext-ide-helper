<?php

namespace http;

use http\Message\Body;

/**
 * The message class builds the foundation for any request and response message.
 * See http\Client\Request and http\Client\Response, as well as http\Env\Request and http\Env\Response.
 * Class Message
 * @package http
 */
class Message implements \Countable, \Serializable, \Iterator
{
    /**
     * No specific type of message.
     */
    const TYPE_NONE = 0;

    /**
     * A request message.
     */
    const TYPE_REQUEST = 1;

    /**
     * A response message.
     */
    const TYPE_RESPONSE = 2;

    /**
     * The message type. See http\Message::TYPE_* constants.
     * @var int $type
     *
     * @access protected
     */
    protected $type = 0;

    /**
     * The message’s body.
     * @var Message\Body $body
     *
     * @access protected
     */
    protected $body;

    /**
     * The request method if the message is of type request.
     * @var string $requestMethod
     *
     * @access protected
     */
    protected $requestMethod = '';

    /**
     * The request url if the message is of type request.
     * @var string $requestUrl
     *
     * @access protected
     */
    protected $requestUrl = '';

    /**
     * The respose status phrase if the message is of type response.
     * @var string $responseStatus
     *
     * @access protected
     */
    protected $responseStatus = '';

    /**
     * The response code if the message is of type response.
     * @var int $responseCode
     *
     * @access protected
     */
    protected $responseCode = 0;

    /**
     * A custom HTTP protocol version.
     * @var string $httpVersion
     *
     * @access protected
     */
    protected $httpVersion;

    /**
     * Any message headers.
     * @var array $headers
     *
     * @access protected
     */
    protected $headers;

    /**
     * Any parent message.
     * @var Message $parentMessage
     *
     * @access protected
     */
    protected $parentMessage;

    /**
     * Create a new HTTP message.
     * @param  mixed $message
     * @param  bool $greedy
     * @return void
     */
    public function __construct($message, $greedy = true)
    {

    }

    /**
     * Retrieve the message’s body.
     * @return Message\Body
     */
    public function getBody()
    {

    }

    /**
     * Set the message’s body.
     * @param Message\Body $body
     * @return Message
     */
    public function setBody($body)
    {

    }

    /**
     * Append the data of $body to the message’s body.
     * @param Message\Body $body
     * @return Message
     */
    public function addBody($body)
    {

    }

    /**
     * Retrieve a single header, optionally hydrated into a http\Header extending class.
     * @param  string $header
     * @param  string $into_class
     * @return mixed
     */
    public function getHeader($header, $into_class = null)
    {

    }

    /**
     * Set a single header.
     * @param  string $header
     * @param  mixed $value
     * @return Message
     */
    public function setHeader($header, $value = null)
    {

    }

    /**
     *
     *
     * @example
     * @param  mixed $header
     * @param  mixed $value
     * @return
     */
    public function addHeader($header, $value)
    {

    }

    /**
     * Retrieve all message headers.
     * @return array
     */
    public function getHeaders()
    {

    }

    /**
     * Set the message headers.
     * @param array $headers
     * @return Message
     */
    public function setHeaders(Array $headers)
    {

    }

    /**
     * Add headers, optionally appending values, if header keys already exist.
     * @param  array $headers
     * @param  bool $append
     * @return Message
     */
    public function addHeaders(Array $headers, $append = false)
    {

    }

    /**
     * Retrieve the type of the message.
     * @return int
     */
    public function getType()
    {

    }

    /**
     * Set the message type and reset the message info.
     * @param  int $type
     * @return Message
     */
    public function setType($type)
    {

    }

    /**
     * Retrieve the first line of a request or response message.
     * @return string
     */
    public function getInfo()
    {

    }

    /**
     * Set the complete message info, i.e. type and response resp. request information, at once.
     * @param  string $http_info
     * @return Message
     */
    public function setInfo($http_info)
    {

    }

    /**
     * Retrieve the response code of the message.
     * @return int
     */
    public function getResponseCode()
    {

    }

    /**
     * Set the response status code.
     * @param  int $response_code
     * @param  bool $strict
     * @return Message
     */
    public function setResponseCode($response_code, $strict = true)
    {

    }

    /**
     * Retrieve the response status of the message.
     * @return string
     */
    public function getResponseStatus()
    {

    }

    /**
     * Set the response status phrase.
     * @param  string $response_status
     * @return Message
     */
    public function setResponseStatus($response_status)
    {

    }

    /**
     * Retrieve the request method of the message.
     * @return string
     */
    public function getRequestMethod()
    {

    }

    /**
     * Set the request method of the message.
     * @param  string $request_method
     * @return Message
     */
    public function setRequestMethod($request_method)
    {

    }

    /**
     * Retrieve the request URL of the message.
     * @return string
     */
    public function getRequestUrl()
    {

    }

    /**
     * Set the request URL of the message.
     * @param  string $url
     * @return Message
     */
    public function setRequestUrl($url)
    {

    }

    /**
     * Retreive the HTTP protocol version of the message.
     * @return string
     */
    public function getHttpVersion()
    {

    }

    /**
     * Set the HTTP protocol version of the message.
     * @param  string $http_version
     * @return Message
     */
    public function setHttpVersion($http_version)
    {

    }

    /**
     * Retrieve any parent message.
     * @return Message
     */
    public function getParentMessage()
    {

    }

    /**
     * Retrieve the message serialized to a string.
     * @param  bool $include_parent
     * @return string
     */
    public function toString($include_parent = false)
    {

    }

    /**
     * Stream the message through a callback.
     * @param  callable $callback
     * @param  int $offset
     * @param  int $maxlen
     * @return Message
     */
    public function toCallback($callback, $offset = 0, $maxlen = 0)
    {

    }

    /**
     * Stream the message into stream $stream, starting from $offset, streaming $maxlen at most.
     * @param  mixed $stream
     * @param  int $offset
     * @param  int $maxlen
     * @return Message
     */
    public function toStream($stream, $offset = 0, $maxlen = 0)
    {

    }

    /**
     * Implements Countable.
     * @return int
     */
    public function count()
    {

    }

    /**
     * Implements Serializable.
     * @return string
     */
    public function serialize()
    {

    }

    /**
     * Implements Serializable.
     * @param  string $serialized
     * @return void
     */
    public function unserialize($serialized)
    {

    }

    /**
     * Implements Iterator.
     * @return void
     */
    public function rewind()
    {

    }

    /**
     * Implements Iterator.
     * @return bool
     */
    public function valid()
    {

    }

    /**
     * Implements iterator.
     * @return Message
     */
    public function current()
    {

    }

    /**
     * Implements Iterator.
     * @return int
     */
    public function key()
    {

    }

    /**
     * Implements Iterator.
     * @return void
     */
    public function next()
    {

    }

    /**
     * Retrieve the message serialized to a string.
     * @return string
     */
    public function __toString()
    {

    }

    /**
     * Detach a clone of this message from any message chain.
     * @return Message
     */
    public function detach()
    {

    }

    /**
     * Prepend message(s) $message to this message, or the top most message of this message chain.
     * @param Message $message
     * @param  mixed $top
     * @return Message
     */
    public function prepend($message, $top = true)
    {

    }

    /**
     * Reverse the message chain and return the former top-most message.
     * @return Message
     */
    public function reverse()
    {

    }

    /**
     * Check whether this message is a multipart message based on it’s content type.
     * @param  string $boundary
     * @return
     */
    public function isMultipart(&$boundary = null)
    {

    }

    /**
     * Splits the body of a multipart message.
     * @return Message
     */
    public function splitMultipartBody()
    {

    }

}

