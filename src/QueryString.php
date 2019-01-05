<?php

namespace http;

/**
 * The http\QueryString class provides versatile facilities to retrieve, use and manipulate query strings and form data.
 * Class QueryString
 * @package http
 */
class QueryString implements \Serializable, \ArrayAccess, \IteratorAggregate
{
    /**
     * Cast requested value to bool.
     */
    const TYPE_BOOL = 13;

    /**
     * Cast requested value to int.
     */
    const TYPE_INT = 4;

    /**
     * Cast requested value to float.
     */
    const TYPE_FLOAT = 5;

    /**
     * Cast requested value to string.
     */
    const TYPE_STRING = 6;

    /**
     * Cast requested value to an array.
     */
    const TYPE_ARRAY = 7;

    /**
     * Cast requested value to an object.
     */
    const TYPE_OBJECT = 8;

    /**
     * The global instance. See http\QueryString::getGlobalInstance().
     * @var QueryString $instance
     *
     * @access private
     */
    private static $instance;

    /**
     * The data.
     * @var array $queryArray
     * @access private
     */
    private $queryArray;

    /**
     * Create an independent querystring instance.
     * @param  mixed $params
     * @return void
     */
    public final function __construct($params = null)
    {

    }

    /**
     * Simply returns http\QueryString::$queryArray.
     * @return array
     */
    public function toArray()
    {

    }

    /**
     * Get the string represenation of the querystring (x-www-form-urlencoded).
     * @return string
     */
    public function toString()
    {

    }

    /**
     * Retrieve an querystring value.
     * @param  string|null $name
     * @param  mixed|null $type
     * @param  mixed|null $defval
     * @param  bool|false $delete
     * @return mixed
     */
    public function get($name, $type, $defval, $delete)
    {

    }

    /**
     * Set additional querystring entries.
     * @param  mixed $params
     * @return QueryString
     */
    public function set($params)
    {

    }

    /**
     * Set additional $params to a clone of this instance.
     * @param  mixed|null $params
     * @return QueryString
     */
    public function mod($params)
    {

    }

    /**
     * Retrieve a boolean value at offset $name.
     * @param  string $name
     * @param  mixed|null $defval
     * @param  bool|false $delete
     * @return bool
     */
    public function getBool($name, $defval, $delete)
    {

    }

    /**
     * Retrieve a int value at offset $name.
     * @param  string $name
     * @param  mixed|null $defval
     * @param  bool|false $delete
     * @return int
     */
    public function getInt($name, $defval, $delete)
    {

    }

    /**
     * Retrieve a float value at offset $name.
     * @param  string $name
     * @param  mixed|null $defval
     * @param  bool|false $delete
     * @return float
     */
    public function getFloat($name, $defval, $delete)
    {

    }

    /**
     * Retrieve a string value with at offset $name.
     * @param  string $name
     * @param  mixed|null $defval
     * @param  bool|false $delete
     * @return string
     */
    public function getString($name, $defval, $delete)
    {

    }

    /**
     * Retrieve an array value with at offset $name.
     * @param  string $name
     * @param  mixed|null $defval
     * @param  bool|false $delete
     * @return array
     */
    public function getArray($name, $defval, $delete)
    {

    }

    /**
     * Retrieve a object value with at offset $name.
     * @param  string $name
     * @param  mixed|null $defval
     * @param  bool|false $delete
     * @return object
     */
    public function getObject($name, $defval, $delete)
    {

    }

    /**
     * Implements IteratorAggregate.
     * @return \Iterator
     */
    public function getIterator()
    {

    }

    /**
     * Retrieve the global querystring instance referencing $_GET.
     * @return QueryString
     */
    public static function getGlobalInstance()
    {

    }

    /**
     * Translate character encodings of the querystring with ext/iconv.
     * @param  string $from_encoding
     * @param  string $to_encoding
     * @return QueryString
     */
    public function xlate($from_encoding, $to_encoding)
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
     * @param  mixed $serialized
     * @return void
     */
    public function unserialize($serialized)
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

    /**
     * Implements ArrayAccess.
     * @param  string $name
     * @param  mixed $data
     * @return void
     */
    public function offsetSet($name, $data)
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

}

