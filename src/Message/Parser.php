<?php

namespace http\Message;

use http\Message;

/**
 * Class Parser
 * @package http\Message
 */
class Parser
{
    /**
     * Finish up parser at end of (incomplete) input.
     */
    const CLEANUP = 1;

    /**
     * Soak up the rest of input if no entity length is deducible.
     */
    const DUMB_BODIES = 2;

    /**
     * Redirect messages do not contain any body despite of indication of such.
     */
    const EMPTY_REDIRECTS = 4;

    /**
     * Continue parsing while input is available.
     */
    const GREEDY = 8;

    /**
     * Parse failure.
     */
    const STATE_FAILURE = -1;

    /**
     * Expecting HTTP info (request/response line) or headers.
     */
    const STATE_START = 0;

    /**
     * Parsing headers.
     */
    const STATE_HEADER = 1;

    /**
     * Completed parsing headers.
     */
    const STATE_HEADER_DONE = 2;

    /**
     * Parsing the body.
     */
    const STATE_BODY = 3;

    /**
     * Soaking up all input as body.
     */
    const STATE_BODY_DUMB = 4;

    /**
     * Reading body as indicated by Content-Lenght or Content-Range.
     */
    const STATE_BODY_LENGTH = 5;

    /**
     * Parsing chunked encoded body.
     */
    const STATE_BODY_CHUNKED = 6;

    /**
     * Finished parsing the body.
     */
    const STATE_BODY_DONE = 7;

    /**
     *
     */
    const STATE_UPDATE_CL = 8;

    /**
     * Finished parsing the message.
     */
    const STATE_DONE = 9;

    /**
     * Retrieve the current state of the parser.
     * @return int
     */
    public function getState()
    {

    }

    /**
     * Parse a string.
     * @param  string $data
     * @param  int $flags
     * @param  Message $message
     * @return int
     */
    public function parse($data, $flags, &$message)
    {

    }

    /**
     * Parse a stream.
     * @param  resource $stream
     * @param  int $flags
     * @param  Message $message
     * @return int
     */
    public function stream($stream, $flags, &$message)
    {

    }

}

