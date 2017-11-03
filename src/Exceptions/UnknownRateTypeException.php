<?php

namespace YanDatsyuk\Courses\Exceptions;

use Throwable;

/**
 * Class UnknownRateTypeException
 * @package YanDatsyuk\Courses\Exceptions
 */
class UnknownRateTypeException extends \Exception
{
    public function __construct($message = "UnknownRateTypeException", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}