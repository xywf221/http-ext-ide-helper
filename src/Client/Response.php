<?php

namespace http\Client;

use http\Cookie;

/**
 * The http\Client\Response class represents an HTTP message the client returns as answer from a server to an http\Client\Request.
 * Class Response
 * @package http\Client
 */
class Response extends \http\Message implements \Traversable, \Iterator, \Serializable, \Countable
{
    /**
     * Extract response cookies.
     * @param  int $flags
     * @param  array $allowed_extras
     * @return Cookie[]|mixed
     */
    public function getCookies($flags = 0, $allowed_extras = null)
    {
    }

    /**
     * Retrieve transfer related information after the request has completed.
     * @param  string $name
     * @return mixed
     */
    public function getTransferInfo($name)
    {

    }
}

