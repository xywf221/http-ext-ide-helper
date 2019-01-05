<?php
/**
 * Http自动补全类(基于最新的3.2.0版本)
 * @author shixinke(http://www.shixinke.com)
 * @modified 2019/01/05
 */

/**
 *
 */

namespace http\Env;
class Response extends \http\Message implements \Traversable, \Iterator, \Serializable, \Countable
{
    /**
     *
     */
    const TYPE_NONE = 0;

    /**
     *
     */
    const TYPE_REQUEST = 1;

    /**
     *
     */
    const TYPE_RESPONSE = 2;

    /**
     *
     */
    const CONTENT_ENCODING_NONE = 0;

    /**
     *
     */
    const CONTENT_ENCODING_GZIP = 1;

    /**
     *
     */
    const CACHE_NO = 0;

    /**
     *
     */
    const CACHE_HIT = 1;

    /**
     *
     */
    const CACHE_MISS = 2;

    /**
     * @var int $type
     *
     * @access protected
     */
    protected $type = 0;

    /**
     * @var unknown $body
     *
     * @access protected
     */
    protected $body;

    /**
     * @var string $requestMethod
     *
     * @access protected
     */
    protected $requestMethod = '';

    /**
     * @var string $requestUrl
     *
     * @access protected
     */
    protected $requestUrl = '';

    /**
     * @var string $responseStatus
     *
     * @access protected
     */
    protected $responseStatus = '';

    /**
     * @var int $responseCode
     *
     * @access protected
     */
    protected $responseCode = 0;

    /**
     * @var unknown $httpVersion
     *
     * @access protected
     */
    protected $httpVersion;

    /**
     * @var unknown $headers
     *
     * @access protected
     */
    protected $headers;

    /**
     * @var unknown $parentMessage
     *
     * @access protected
     */
    protected $parentMessage;

    /**
     * @var unknown $request
     *
     * @access protected
     */
    protected $request;

    /**
     * @var unknown $cookies
     *
     * @access protected
     */
    protected $cookies;

    /**
     * @var unknown $contentType
     *
     * @access protected
     */
    protected $contentType;

    /**
     * @var unknown $contentDisposition
     *
     * @access protected
     */
    protected $contentDisposition;

    /**
     * @var unknown $contentEncoding
     *
     * @access protected
     */
    protected $contentEncoding;

    /**
     * @var unknown $cacheControl
     *
     * @access protected
     */
    protected $cacheControl;

    /**
     * @var unknown $etag
     *
     * @access protected
     */
    protected $etag;

    /**
     * @var unknown $lastModified
     *
     * @access protected
     */
    protected $lastModified;

    /**
     * @var unknown $throttleDelay
     *
     * @access protected
     */
    protected $throttleDelay;

    /**
     * @var unknown $throttleChunk
     *
     * @access protected
     */
    protected $throttleChunk;

    /**
     *
     *
     * @example
     * @return
     */
    public function __construct()
    {

    }

    /**
     *
     *
     * @example
     * @param  mixed $ob_string
     * @param  mixed $ob_flags
     * @return
     */
    public function __invoke($ob_string, $ob_flags)
    {

    }

    /**
     *
     *
     * @example
     * @param http\Message $env_request
     * @return
     */
    public function setEnvRequest(http\Message $env_request)
    {

    }

    /**
     *
     *
     * @example
     * @param  mixed $cookie
     * @return
     */
    public function setCookie($cookie)
    {

    }

    /**
     *
     *
     * @example
     * @param  mixed $content_type
     * @return
     */
    public function setContentType($content_type)
    {

    }

    /**
     *
     *
     * @example
     * @param array $disposition_params
     * @return
     */
    public function setContentDisposition(Array $disposition_params)
    {

    }

    /**
     *
     *
     * @example
     * @param  mixed $content_encoding
     * @return
     */
    public function setContentEncoding($content_encoding)
    {

    }

    /**
     *
     *
     * @example
     * @param  mixed $cache_control
     * @return
     */
    public function setCacheControl($cache_control)
    {

    }

    /**
     *
     *
     * @example
     * @param  mixed $last_modified
     * @return
     */
    public function setLastModified($last_modified)
    {

    }

    /**
     *
     *
     * @example
     * @param  mixed $header_name
     * @return
     */
    public function isCachedByLastModified($header_name)
    {

    }

    /**
     *
     *
     * @example
     * @param  mixed $etag
     * @return
     */
    public function setEtag($etag)
    {

    }

    /**
     *
     *
     * @example
     * @param  mixed $header_name
     * @return
     */
    public function isCachedByEtag($header_name)
    {

    }

    /**
     *
     *
     * @example
     * @param  mixed $chunk_size
     * @param  mixed $delay
     * @return
     */
    public function setThrottleRate($chunk_size, $delay)
    {

    }

    /**
     *
     *
     * @example
     * @param  mixed $stream
     * @return
     */
    public function send($stream)
    {

    }

    /**
     *
     *
     * @example
     * @return
     */
    public function getBody()
    {

    }

    /**
     *
     *
     * @example
     * @param http\Message\Body $body
     * @return
     */
    public function setBody(http\Message\Body $body)
    {

    }

    /**
     *
     *
     * @example
     * @param http\Message\Body $body
     * @return
     */
    public function addBody(http\Message\Body $body)
    {

    }

    /**
     *
     *
     * @example
     * @param  mixed $header
     * @param  mixed $into_class
     * @return
     */
    public function getHeader($header, $into_class)
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
    public function setHeader($header, $value)
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
     *
     *
     * @example
     * @return
     */
    public function getHeaders()
    {

    }

    /**
     *
     *
     * @example
     * @param array $headers
     * @return
     */
    public function setHeaders(Array $headers)
    {

    }

    /**
     *
     *
     * @example
     * @param array $headers
     * @param  mixed $append
     * @return
     */
    public function addHeaders(Array $headers, $append)
    {

    }

    /**
     *
     *
     * @example
     * @return
     */
    public function getType()
    {

    }

    /**
     *
     *
     * @example
     * @param  mixed $type
     * @return
     */
    public function setType($type)
    {

    }

    /**
     *
     *
     * @example
     * @return
     */
    public function getInfo()
    {

    }

    /**
     *
     *
     * @example
     * @param  mixed $http_info
     * @return
     */
    public function setInfo($http_info)
    {

    }

    /**
     *
     *
     * @example
     * @return
     */
    public function getResponseCode()
    {

    }

    /**
     *
     *
     * @example
     * @param  mixed $response_code
     * @param  mixed $strict
     * @return
     */
    public function setResponseCode($response_code, $strict)
    {

    }

    /**
     *
     *
     * @example
     * @return
     */
    public function getResponseStatus()
    {

    }

    /**
     *
     *
     * @example
     * @param  mixed $response_status
     * @return
     */
    public function setResponseStatus($response_status)
    {

    }

    /**
     *
     *
     * @example
     * @return
     */
    public function getRequestMethod()
    {

    }

    /**
     *
     *
     * @example
     * @param  mixed $request_method
     * @return
     */
    public function setRequestMethod($request_method)
    {

    }

    /**
     *
     *
     * @example
     * @return
     */
    public function getRequestUrl()
    {

    }

    /**
     *
     *
     * @example
     * @param  mixed $url
     * @return
     */
    public function setRequestUrl($url)
    {

    }

    /**
     *
     *
     * @example
     * @return
     */
    public function getHttpVersion()
    {

    }

    /**
     *
     *
     * @example
     * @param  mixed $http_version
     * @return
     */
    public function setHttpVersion($http_version)
    {

    }

    /**
     *
     *
     * @example
     * @return
     */
    public function getParentMessage()
    {

    }

    /**
     *
     *
     * @example
     * @param  mixed $include_parent
     * @return
     */
    public function toString($include_parent)
    {

    }

    /**
     *
     *
     * @example
     * @param  mixed $callback
     * @return
     */
    public function toCallback($callback)
    {

    }

    /**
     *
     *
     * @example
     * @param  mixed $stream
     * @return
     */
    public function toStream($stream)
    {

    }

    /**
     *
     *
     * @example
     * @return
     */
    public function count()
    {

    }

    /**
     *
     *
     * @example
     * @return
     */
    public function serialize()
    {

    }

    /**
     *
     *
     * @example
     * @param  mixed $serialized
     * @return
     */
    public function unserialize($serialized)
    {

    }

    /**
     *
     *
     * @example
     * @return
     */
    public function rewind()
    {

    }

    /**
     *
     *
     * @example
     * @return
     */
    public function valid()
    {

    }

    /**
     *
     *
     * @example
     * @return
     */
    public function current()
    {

    }

    /**
     *
     *
     * @example
     * @return
     */
    public function key()
    {

    }

    /**
     *
     *
     * @example
     * @return
     */
    public function next()
    {

    }

    /**
     *
     *
     * @example
     * @return
     */
    public function __toString()
    {

    }

    /**
     *
     *
     * @example
     * @return
     */
    public function detach()
    {

    }

    /**
     *
     *
     * @example
     * @param http\Message $message
     * @param  mixed $top
     * @return
     */
    public function prepend(http\Message $message, $top)
    {

    }

    /**
     *
     *
     * @example
     * @return
     */
    public function reverse()
    {

    }

    /**
     *
     *
     * @example
     * @param  mixed $boundary
     * @return
     */
    public function isMultipart($boundary)
    {

    }

    /**
     *
     *
     * @example
     * @return
     */
    public function splitMultipartBody()
    {

    }

}

