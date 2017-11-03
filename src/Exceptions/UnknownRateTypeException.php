<?php

namespace YanDatsyuk\Courses\Exceptions;

use Throwable;

class UnknownRateTypeException extends \Exception
{
    public function __construct($message = "UnknownRateTypeException", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}