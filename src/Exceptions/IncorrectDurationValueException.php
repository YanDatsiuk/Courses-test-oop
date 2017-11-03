<?php

namespace YanDatsyuk\Courses\Exceptions;

use Throwable;

/**
 * Class IncorrectDurationValueException
 * @package YanDatsyuk\Courses\Exceptions
 */
class IncorrectDurationValueException extends \Exception
{
    public function __construct($message = "IncorrectDurationValueException", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}