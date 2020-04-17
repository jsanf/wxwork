<?php
/**
 * author : abel.tang
 * Date: 2019-09-02  17:22
 */

namespace wxwork\exception;


use Exception;

class NetWorkError extends Exception
{
    public function __construct($message, $code = 0, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    public function __toString()
    {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }
}