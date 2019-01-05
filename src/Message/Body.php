<?php
/**
 * Http自动补全类(基于最新的3.2.0版本)
 * @author shixinke(http://www.shixinke.com)
 * @modified 2019/01/05
 */

/**
 *
 */

namespace http\Message;

use http\Message;

class Body implements \Serializable
{
    /**
     * Create a new message body, optionally referencing $stream.
     * @param  resource $stream
     * @return void
     */
    public function __construct($stream)
    {

    }

    /**
     * String cast handler.
     * @return string
     */
    public function __toString()
    {

    }

    /**
     * Retrieve the message body serialized to a string.
     * @return string
     */
    public function toString()
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
     * Stream the message body into antother stream $stream, starting from $offset, streaming $maxlen at most.
     * @param  resource $stream
     * @param  int $offset
     * @param  int $maxlen
     * @return Body
     */
    public function toStream($stream, $offset = 0, $maxlen = 0)
    {

    }

    /**
     * Stream the message body through a callback.
     * @param  callable $callback
     * @param  int $offset
     * @param  int $maxlen
     * @return Body
     */
    public function toCallback($callback, $offset = 0, $maxlen = 0)
    {

    }

    /**
     * Retrieve the underlying stream resource.
     * @return resource
     */
    public function getResource()
    {

    }

    /**
     * Retrieve any boundary of the message body.
     * @return string
     */
    public function getBoundary()
    {

    }

    /**
     * Append plain bytes to the message body.
     * @param  string $data
     * @return Body
     */
    public function append($data)
    {

    }

    /**
     * Add form fields and files to the message body.
     * @param array $fields
     * @param array $files
     * @return Body
     */
    public function addForm(Array $fields = null, Array $files = null)
    {

    }

    /**
     * Add a part to a multipart body.
     * @param Message $message
     * @return Body
     */
    public function addPart($message)
    {

    }

    /**
     * Retrieve the ETag of the body.
     * @return string
     */
    public function etag()
    {

    }

    /**
     * Stat size, atime, mtime and/or ctime.
     * @param  string $field
     * @return mixed
     */
    public function stat($field = null)
    {

    }

}

