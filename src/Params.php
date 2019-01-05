<?php

namespace http;

/**
 * Parse, interpret and compose HTTP (header) parameters.
 * Class Params
 * @package http
 */
class Params implements \ArrayAccess
{
    /**
     * The default parameter separator (“,”).
     */
    const DEF_PARAM_SEP = ',';

    /**
     * The default argument separator (“;”).
     */
    const DEF_ARG_SEP = ';';

    /**
     * The default value separator (“=”).
     */
    const DEF_VAL_SEP = '=';

    /**
     * Empty param separator to parse cookies.
     */
    const COOKIE_PARAM_SEP = '';

    /**
     * Do not interpret the parsed parameters.
     */
    const PARSE_RAW = 0;

    /**
     * @internal
     */
    const PARSE_ESCAPED = 1;

    /**
     * Urldecode single units of parameters, arguments and values.
     */
    const PARSE_URLENCODED = 4;

    /**
     * Parse sub dimensions indicated by square brackets.
     */
    const PARSE_DIMENSION = 8;

    /**
     * Parse RFC5987 style encoded character set and language information embedded in HTTP header params.
     */
    const PARSE_RFC5987 = 16;

    /**
     * Parse RFC5988 (Web Linking) tags of Link headers.
     */
    const PARSE_RFC5988 = 32;

    /**
     *  Interpret input as default formatted parameters.
     */
    const PARSE_DEFAULT = 17;

    /**
     * Parse URL querystring (same as http\Params::PARSE_URLENCODED|http\Params::PARSE_DIMENSION).
     */
    const PARSE_QUERY = 12;

    /**
     * The (parsed) parameters.
     * @var array $params
     *
     * @access public
     */
    public $params;

    /**
     * The parameter separator(s).
     * @var string $param_sep
     *
     * @access public
     */
    public $param_sep = ',';

    /**
     * The argument separator(s).
     * @var string $arg_sep
     *
     * @access public
     */
    public $arg_sep = ';';

    /**
     * The value separator(s).
     * @var string $val_sep
     *
     * @access public
     */
    public $val_sep = '=';

    /**
     * The modus operandi of the parser. See http\Params::PARSE_* constants.
     * @var int $flags
     *
     * @access public
     */
    public $flags = 17;

    /**
     * Instantiate a new HTTP (header) parameter set.
     * @param  mixed $params
     * @param  mixed $param_sep
     * @param  mixed $arg_sep
     * @param  mixed $val_sep
     * @param  int $flags
     * @return void
     */
    public final function __construct($params, $param_sep = Params::DEF_PARAM_SEP, $arg_sep = Params::DEF_ARG_SEP, $val_sep = Params::DEF_VAL_SEP, $flags = Params::PARSE_DEFAULT)
    {

    }

    /**
     * Convenience method that simply returns http\Params::$params.
     * @return array
     */
    public function toArray()
    {

    }

    /**
     * Returns a stringified version of the parameters.
     * @return string
     */
    public function toString()
    {

    }

    /**
     * String cast handler. Alias of http\Params::toString().
     * @return string
     */
    public function __toString()
    {

    }

    /**
     * Implements ArrayAccess.
     * @param  string $name
     * @return bool
     */
    public function offsetExists($name)
    {

    }

    /**
     * Implements ArrayAccess.
     * @param  string $name
     * @return void
     */
    public function offsetUnset($name)
    {

    }

    /**
     * Implements ArrayAccess.
     * @param  string $name
     * @param  mixed $value
     * @return
     */
    public function offsetSet($name, $value)
    {

    }

    /**
     * Implements ArrayAccess.
     * @param  string $name
     * @return mixed
     */
    public function offsetGet($name)
    {

    }

}

