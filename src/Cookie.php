<?php

namespace http;

/**
 * A class representing a list of cookies with specific attributes.
 * Class Cookie
 * @package http
 */
class Cookie
{
    /**
     * Do not decode cookie contents.
     */
    const PARSE_RAW = 1;

    /**
     * The cookies' flags have the secure attribute set.
     */
    const SECURE = 16;

    /**
     * The cookies' flags have the httpOnly attribute set.
     */
    const HTTPONLY = 32;

    /**
     * Create a new cookie list.
     * @param  mixed $cookie_string
     * @param  int $parser_flags
     * @param  array $allowed_extras
     * @return void
     */
    public function __construct($cookie_string = null, $parser_flags = 0, $allowed_extras = null)
    {

    }

    /**
     * Get the list of cookies.
     * @return array
     */
    public function getCookies()
    {

    }

    /**
     * (Re)set the cookies.
     * @param  array $cookies
     * @return Cookie
     */
    public function setCookies($cookies)
    {

    }

    /**
     * (Re)set the cookies.
     * @param  array $cookies
     * @return Cookie
     */
    public function addCookies($cookies)
    {

    }

    /**
     * Retrieve a specific cookie value.
     * @param  string $name
     * @return string
     */
    public function getCookie($name)
    {

    }

    /**
     * (Re)set a cookie.
     * @param  string $cookie_name
     * @param  string $cookie_value
     * @return Cookie
     */
    public function setCookie($cookie_name, $cookie_value)
    {

    }

    /**
     * Add a cookie.
     * @param  string $cookie_name
     * @param  string $cookie_value
     * @return Cookie
     */
    public function addCookie($cookie_name, $cookie_value)
    {

    }

    /**
     * Retrieve the list of extra attributes.
     * @return array
     */
    public function getExtras()
    {

    }

    /**
     * (Re)set the extra attributes
     * @param  array $extras
     * @return
     */
    public function setExtras($extras = null)
    {

    }

    /**
     * Add several extra attributes.
     * @param  array $extras
     * @return
     */
    public function addExtras($extras)
    {

    }

    /**
     * Retrieve an extra attribute.
     * @param  string $name
     * @return string
     */
    public function getExtra($name)
    {

    }

    /**
     * (Re)set an extra attribute.
     * @param  string $extra_name
     * @param  string $extra_value
     * @return Cookie
     */
    public function setExtra($extra_name, $extra_value = null)
    {

    }

    /**
     * Add an extra attribute to the cookie list.
     * @param  string $extra_name
     * @param  string $extra_value
     * @return Cookie
     */
    public function addExtra($extra_name, $extra_value)
    {

    }

    /**
     *
     * Retrieve the effective domain of the cookie list.
     * @return string
     */
    public function getDomain()
    {

    }

    /**
     * Set the effective domain of the cookie list.
     * @param  string $value
     * @return Cookie
     */
    public function setDomain($value)
    {

    }

    /**
     * Retrieve the path the cookie(s) of this cookie list are effective at.
     * @return string
     */
    public function getPath()
    {

    }

    /**
     * Set the path the cookie(s) of this cookie list should be effective at.
     * @param  string $value
     * @return Cookie
     */
    public function setPath($value)
    {

    }

    /**
     * Get the currently set expires attribute.
     * @return int
     */
    public function getExpires()
    {

    }

    /**
     * Set the traditional expires timestamp.
     * @param  int $value
     * @return Cookie
     */
    public function setExpires($value = -1)
    {

    }

    /**
     * Get the currently set max-age attribute of the cookie list.
     * @return int
     */
    public function getMaxAge()
    {

    }

    /**
     * Set the maximum age the cookie may have on the client side.
     * @param  int $value
     * @return Cookie
     */
    public function setMaxAge($value = -1)
    {

    }

    /**
     * Get the currently set flags.
     * @return int
     */
    public function getFlags()
    {

    }

    /**
     * Set the flags to specified $value.
     * @param  int $value
     * @return Cookie
     */
    public function setFlags($value = 0)
    {

    }

    /**
     * Get the cookie list as array.
     * @return array
     */
    public function toArray()
    {

    }

    /**
     * Retrieve the string representation of the cookie list.
     * @return string
     */
    public function toString()
    {

    }

    /**
     * String cast handler. Alias of http\Cookie::toString().
     * @return string
     */
    public function __toString()
    {

    }

}

