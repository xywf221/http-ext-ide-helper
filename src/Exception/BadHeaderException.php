<?php
/**
 * Http自动补全类(基于最新的3.2.0版本)
 * @author shixinke(http://www.shixinke.com)
 * @modified 2019/01/05
 */

/**
 *
 */

namespace http\Exception;
class BadHeaderException extends \DomainException implements \Throwable, \http\Exception
{
    /**
     * @var string $message
     *
     * @access protected
     */
    protected $message = '';

    /**
     * @var int $code
     *
     * @access protected
     */
    protected $code = 0;

    /**
     * @var unknown $file
     *
     * @access protected
     */
    protected $file;

    /**
     * @var unknown $line
     *
     * @access protected
     */
    protected $line;

    /**
     *
     *
     * @example
     * @return
     */
    private final function __clone()
    {

    }

    /**
     *
     *
     * @example
     * @param  mixed $message
     * @param  mixed $code
     * @param  mixed $previous
     * @return
     */
    public function __construct($message, $code, $previous)
    {

    }

    /**
     *
     *
     * @example
     * @return
     */
    public function __wakeup()
    {

    }

    /**
     *
     *
     * @example
     * @return
     */
    public final function getMessage()
    {

    }

    /**
     *
     *
     * @example
     * @return
     */
    public final function getCode()
    {

    }

    /**
     *
     *
     * @example
     * @return
     */
    public final function getFile()
    {

    }

    /**
     *
     *
     * @example
     * @return
     */
    public final function getLine()
    {

    }

    /**
     *
     *
     * @example
     * @return
     */
    public final function getTrace()
    {

    }

    /**
     *
     *
     * @example
     * @return
     */
    public final function getPrevious()
    {

    }

    /**
     *
     *
     * @example
     * @return
     */
    public final function getTraceAsString()
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

}

