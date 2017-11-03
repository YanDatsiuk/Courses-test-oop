<?php

namespace YanDatsyuk\Courses\Exceptions;

use Throwable;

/**
 * Class IncorrectPriceValueException
 * @package YanDatsyuk\Courses\Exceptions
 */
class IncorrectPriceValueException extends \Exception
{
    public function __construct($message = "IncorrectPriceValueException", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}