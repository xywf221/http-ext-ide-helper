<?php

namespace http;

/**
 * The http\Header class provides methods to manipulate, match, negotiate and serialize HTTP headers.
 * Class Header
 * @package http
 */
class Header implements \Serializable
{
    /**
     * None of the following match constraints applies.
     */
    const MATCH_LOOSE = 0;

    /**
     * Perform case sensitive matching.
     */
    const MATCH_CASE = 1;

    /**
     * Match only on word boundaries (according by CType alpha-numeric).
     */
    const MATCH_WORD = 16;

    /**
     * Match the complete string.
     */
    const MATCH_FULL = 32;

    /**
     * Case sensitively match the full string (same as MATCH_CASE|MATCH_FULL).
     */
    const MATCH_STRICT = 33;

    /**
     * The name of the HTTP header.
     * @var string $name
     *
     * @access public
     */
    public $name;

    /**
     * The value of the HTTP header.
     * @var mixed $value
     *
     * @access public
     */
    public $value;

    /**
     * Create an http\Header instance for use of simple matching or negotiation. If the value of the header is an array it may be compounded to a single comma separated string.
     * @param  string $name
     * @param  mixed $value
     * @return void
     */
    public function __construct($name, $value)
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
     * String cast handler. Alias of http\Header::serialize().
     * @return string
     */
    public function __toString()
    {

    }

    /**
     * Convenience method. Alias of http\Header::serialize().
     * @return string
     */
    public function toString()
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
     * Match the HTTP header’s value against provided $value according to $flags.
     * @param  string $value
     * @param  int $flags
     * @return bool
     */
    public function match($value, $flags = Header::MATCH_LOOSE)
    {

    }

    /**
     * Negotiate the header’s value against a list of supported values in $supported.
     * @param  array $supported
     * @param  array $result
     * @return string
     */
    public function negotiate($supported, &$result)
    {

    }

    /**
     * Create a parameter list out of the HTTP header value.
     * @param  mixed $param_sep
     * @param  mixed $arg_sep
     * @param  mixed $val_sep
     * @param  mixed $flags
     * @return Params
     */
    public function getParams($param_sep = ",", $arg_sep = ";", $val_sep = "=", $flags = Params::PARSE_DEFAULT)
    {

    }

    /**
     * Parse HTTP headers.
     * @param  string $string
     * @param  string|null $header_class
     * @return array|false
     */
    public static function parse($string, $header_class)
    {

    }

}

