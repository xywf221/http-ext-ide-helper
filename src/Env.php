<?php

namespace http;
/**
 * Class Env
 * @package http
 */
class Env
{
    /**
     * The http\Env class provides static methods to manipulate and inspect the server’s current request’s HTTP environment.
     * @param  string $header_name
     * @return mixed
     */
    public static function getRequestHeader($header_name)
    {

    }

    /**
     * Retreive the current HTTP request’s body.
     * @param  string $body_class_name
     * @return Message\Body
     */
    public static function getRequestBody($body_class_name)
    {

    }

    /**
     * Retrieve the string representation of specified HTTP response code.
     * @param  int $code
     * @return string
     */
    public static function getResponseStatusForCode($code)
    {

    }

    /**
     * Retrieve a list of all known HTTP response status.
     * @return array
     */
    public static function getResponseStatusForAllCodes()
    {

    }

    /**
     * Get one or all HTTP response headers to be sent.
     * @param  string $header_name
     * @return mixed
     */
    public static function getResponseHeader($header_name)
    {

    }

    /**
     * Get the HTTP response code to send.
     * @return int
     */
    public static function getResponseCode()
    {

    }

    /**
     * Set a response header, either replacing a prior set header, or appending the new header value, depending on $replace.
     * @param  string $header_name
     * @param  mixed $header_value
     * @param  int $response_code
     * @param  bool $replace_header
     * @return bool
     */
    public static function setResponseHeader($header_name, $header_value = null, $response_code = 0, $replace_header = true)
    {

    }

    /**
     * Set the HTTP response code to send.
     * @param  int $code
     * @return bool
     */
    public static function setResponseCode($code)
    {

    }

    /**
     * Negotiate the client’s preferred language.
     * @param  array $supported
     * @param  array $result_array
     * @return string
     */
    public static function negotiateLanguage($supported, &$result_array)
    {

    }

    /**
     * Negotiate the client’s preferred MIME content type.
     * @param  array $supported
     * @param  array $result_array
     * @return string
     */
    public static function negotiateContentType($supported, &$result_array)
    {

    }

    /**
     * Negotiate the client’s preferred encoding.
     * @param  array $supported
     * @param  array $result_array
     * @return string
     */
    public static function negotiateEncoding($supported, &$result_array)
    {

    }

    /**
     * Negotiate the client’s preferred character set.
     * @param  array $supported
     * @param  array $result_array
     * @return string
     */
    public static function negotiateCharset($supported, &$result_array)
    {

    }

    /**
     * Generic negotiator. For specific client negotiation see http\Env::negotiateContentType() and related methods.
     * @param  string $params
     * @param  array $supported
     * @param  string $primary_type_separator
     * @param  array $result_array
     * @return string
     */
    public static function negotiate($params, $supported, $primary_type_separator, &$result_array)
    {

    }

}

