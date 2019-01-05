<?php
/**
* Http自动补全类(基于最新的3.2.0版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2019/01/05
*/

/**
*
*/
namespace http\Encoding;
abstract class Stream
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

