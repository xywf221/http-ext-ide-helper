<?php

namespace http;

/**
 * The http\Url class provides versatile means to parse, construct and manipulate URLs.
 * Class Url
 * @package http
 */
class Url
{
    /**
     * Replace parts of the old URL with parts of the new.
     */
    const REPLACE = 0;

    /**
     * Whether a relative path should be joined into the old path.
     */
    const JOIN_PATH = 1;

    /**
     * Whether the querystrings should be joined.
     */
    const JOIN_QUERY = 2;

    /**
     * Strip the user information from the URL.
     */
    const STRIP_USER = 4;

    /**
     * Strip the password from the URL.
     */
    const STRIP_PASS = 8;

    /**
     * Strip user and password information from URL (same as STRIP_USER|STRIP_PASS).
     */
    const STRIP_AUTH = 12;

    /**
     * Do not include the port.
     */
    const STRIP_PORT = 32;

    /**
     * Do not include the URL path.
     */
    const STRIP_PATH = 64;

    /**
     * Do not include the URL querystring.
     */
    const STRIP_QUERY = 128;

    /**
     * Strip the fragment (hash) from the URL.
     */
    const STRIP_FRAGMENT = 256;

    /**
     * Strip everything except scheme and host information.
     */
    const STRIP_ALL = 492;

    /**
     * Import initial URL parts from the SAPI environment.
     */
    const FROM_ENV = 4096;

    /**
     * Whether to sanitize the URL path (consolidate double slashes, directory jumps etc.)
     */
    const SANITIZE_PATH = 8192;

    /**
     * Parse locale encoded multibyte sequences (on systems with wide character support).
     */
    const PARSE_MBLOC = 65536;

    /**
     * Parse UTF-8 encododed multibyte sequences.
     */
    const PARSE_MBUTF8 = 131072;

    /**
     * Parse and convert multibyte hostnames according to IDNA (with IDNA support).
     */
    const PARSE_TOIDN = 1048576;

    /**
     * Explicitly request IDNA2003 implementation if available (libidn, idnkit or ICU).
     */
    const PARSE_TOIDN_2003 = 9437184;

    /**
     * Explicitly request IDNA2008 implementation if available (libidn2, idnkit2 or ICU).
     */
    const PARSE_TOIDN_2008 = 5242880;

    /**
     * Percent encode multibyte sequences in the userinfo, path, query and fragment parts of the URL.
     */
    const PARSE_TOPCT = 2097152;

    /**
     * Continue parsing when encountering errors.
     */
    const IGNORE_ERRORS = 268435456;

    /**
     * Suppress errors/exceptions.
     */
    const SILENT_ERRORS = 536870912;

    /**
     * Standard flags used by default internally for e.g. http\Message::setRequestUrl(). Enables joining path and query, sanitizing path, multibyte/unicode, international domain names and transient percent encoding.
     */
    const STDFLAGS = 3350531;

    /**
     * The URL’s scheme.
     * @var string $scheme
     *
     * @access public
     */
    public $scheme;

    /**
     * Authenticating user.
     * @var string $user
     *
     * @access public
     */
    public $user;

    /**
     * Authentication password.
     * @var string $pass
     *
     * @access public
     */
    public $pass;

    /**
     * Hostname/domain.
     * @var string $host
     *
     * @access public
     */
    public $host;

    /**
     * Port.
     * @var string $port
     *
     * @access public
     */
    public $port;

    /**
     * URL path.
     * @var string $path
     *
     * @access public
     */
    public $path;

    /**
     * URL querystring.
     * @var string $query
     *
     * @access public
     */
    public $query;

    /**
     * URL fragment (hash).
     * @var string $fragment
     *
     * @access public
     */
    public $fragment;

    /**
     *
     *
     * Create an instance of an http\Url.
     * @param  mixed $old_url
     * @param  mixed $new_url
     * @param  int $flags
     * @return void
     */
    public function __construct($old_url = null, $new_url = NULL, $flags = 0)
    {

    }

    /**
     * Clone this URL and apply $parts to the cloned URL.
     * @param  mixed $more_url_parts
     * @param  int $flags
     * @return Url
     */
    public function mod($more_url_parts = null, $flags = Url::JOIN_PATH | Url::JOIN_QUERY | Url::SANITIZE_PATH)
    {

    }

    /**
     * Get the string prepresentation of the URL.
     * @return string
     */
    public function toString()
    {

    }

    /**
     * String cast handler. Alias of http\Url::toString().
     * @return string
     */
    public function __toString()
    {

    }

    /**
     * Retrieve the URL parts as array.
     * @return array
     */
    public function toArray()
    {

    }
}

