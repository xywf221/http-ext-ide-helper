<?php
/**
* Http自动补全类(基于最新的3.2.0版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2019/01/05
*/

/**
*
*/
namespace http\Encoding\Stream;
class Deflate extends \http\Encoding\Stream
{
    /**     
    *
    */
    const FLUSH_NONE    =    0;

    /**     
    *
    */
    const FLUSH_SYNC    =    1048576;

    /**     
    *
    */
    const FLUSH_FULL    =    2097152;

    /**     
    *
    */
    const TYPE_GZIP    =    16;

    /**     
    *
    */
    const TYPE_ZLIB    =    0;

    /**     
    *
    */
    const TYPE_RAW    =    32;

    /**     
    *
    */
    const LEVEL_DEF    =    0;

    /**     
    *
    */
    const LEVEL_MIN    =    1;

    /**     
    *
    */
    const LEVEL_MAX    =    9;

    /**     
    *
    */
    const STRATEGY_DEF    =    0;

    /**     
    *
    */
    const STRATEGY_FILT    =    256;

    /**     
    *
    */
    const STRATEGY_HUFF    =    512;

    /**     
    *
    */
    const STRATEGY_RLE    =    768;

    /**     
    *
    */
    const STRATEGY_FIXED    =    1024;

    /**
     * 
     *
     * @example 
     * @param  mixed $data 
     * @param  mixed $flags 
     * @return 
     */
    public static  function encode($data, $flags)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $flags 
     * @return 
     */
    public function __construct($flags)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $data 
     * @return 
     */
    public function update($data)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function flush()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function done()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function finish()
    {
    
    }

}

