<?php
/**
 * Http自动补全类(基于最新的3.2.0版本)
 * @author shixinke(http://www.shixinke.com)
 * @modified 2019/01/05
 */

/**
 *
 */

namespace http\Client\Curl;
interface User
{
    /**
     *
     */
    const POLL_NONE = 0;

    /**
     *
     */
    const POLL_IN = 1;

    /**
     *
     */
    const POLL_OUT = 2;

    /**
     *
     */
    const POLL_INOUT = 3;

    /**
     *
     */
    const POLL_REMOVE = 4;

    /**
     *
     *
     * @example
     * @param  mixed $run
     * @return
     */
    public function init($run);

    /**
     *
     *
     * @example
     * @param int $timeout_ms
     * @return
     */
    public function timer(int $timeout_ms);

    /**
     *
     *
     * @example
     * @param  mixed $socket
     * @param int $action
     * @return
     */
    public function socket($socket, int $action);

    /**
     *
     *
     * @example
     * @return
     */
    public function once();

    /**
     *
     *
     * @example
     * @param int $timeout_ms
     * @return
     */
    public function wait(int $timeout_ms);

    /**
     *
     *
     * @example
     * @return
     */
    public function send();

}

