<?php

namespace http\Header;

/**
 * The parser which is underlying http\Header and http\Message.
 * Class Parser
 * @package http\Header
 */
class Parser
{
    /**
     * Finish up parser at end of (incomplete) input.
     */
    const CLEANUP = 1;

    /**
     * Parse failure.
     */
    const STATE_FAILURE = -1;

    /**
     * Expecting HTTP info (request/response line) or headers.
     */
    const STATE_START = 0;

    /**
     * Expecting a key or already parsing a key.
     */
    const STATE_KEY = 1;

    /**
     * Expecting a value or already parsing the value.
     */
    const STATE_VALUE = 2;

    /**
     * At EOL of an header, checking whether a folded header line follows.
     */
    const STATE_VALUE_EX = 3;

    /**
     * A header was completed.
     */
    const STATE_HEADER_DONE = 4;

    /**
     * Finished parsing the headers.
     */
    const STATE_DONE = 5;

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
     * @param array $headers
     * @return int
     */
    public function parse($data, $flags, Array &$headers = null)
    {

    }

    /**
     * Parse a stream.
     * @param  resource $stream
     * @param  int $flags
     * @param array $headers
     * @return int
     */
    public function stream($stream, $flags, Array &$headers)
    {

    }

}

