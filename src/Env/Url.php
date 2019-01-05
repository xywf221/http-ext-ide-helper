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
class Url extends \http\Url
{
    /**
     *
     */
    const REPLACE = 0;

    /**
     *
     */
    const JOIN_PATH = 1;

    /**
     *
     */
    const JOIN_QUERY = 2;

    /**
     *
     */
    const STRIP_USER = 4;

    /**
     *
     */
    const STRIP_PASS = 8;

    /**
     *
     */
    const STRIP_AUTH = 12;

    /**
     *
     */
    const STRIP_PORT = 32;

    /**
     *
     */
    const STRIP_PATH = 64;

    /**
     *
     */
    const STRIP_QUERY = 128;

    /**
     *
     */
    const STRIP_FRAGMENT = 256;

    /**
     *
     */
    const STRIP_ALL = 492;

    /**
     *
     */
    const FROM_ENV = 4096;

    /**
     *
     */
    const SANITIZE_PATH = 8192;

    /**
     *
     */
    const PARSE_MBLOC = 65536;

    /**
     *
     */
    const PARSE_MBUTF8 = 131072;

    /**
     *
     */
    const PARSE_TOIDN = 1048576;

    /**
     *
     */
    const PARSE_TOIDN_2003 = 9437184;

    /**
     *
     */
    const PARSE_TOIDN_2008 = 5242880;

    /**
     *
     */
    const PARSE_TOPCT = 2097152;

    /**
     * @var unknown $scheme
     *
     * @access public
     */
    public $scheme;

    /**
     * @var unknown $user
     *
     * @access public
     */
    public $user;

    /**
     * @var unknown $pass
     *
     * @access public
     */
    public $pass;

    /**
     * @var unknown $host
     *
     * @access public
     */
    public $host;

    /**
     * @var unknown $port
     *
     * @access public
     */
    public $port;

    /**
     * @var unknown $path
     *
     * @access public
     */
    public $path;

    /**
     * @var unknown $query
     *
     * @access public
     */
    public $query;

    /**
     * @var unknown $fragment
     *
     * @access public
     */
    public $fragment;

    /**
     *
     *
     * @example
     * @param  mixed $old_url
     * @param  mixed $new_url
     * @param  mixed $flags
     * @return
     */
    public function __construct($old_url, $new_url, $flags)
    {

    }

    /**
     *
     *
     * @example
     * @param  mixed $more_url_parts
     * @param  mixed $flags
     * @return
     */
    public function mod($more_url_parts, $flags)
    {

    }

    /**
     *
     *
     * @example
     * @return
     */
    public function toString()
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
    public function toArray()
    {

    }

}

