<?php

namespace YanDatsyuk\Courses\Exceptions;

use Throwable;

/**
 * Created by PhpStorm.
 * User: datsyuk
 * Date: 02.11.17
 * Time: 13:24
 */
class IncorrectPriceValueException extends \Exception
{
    public function __construct($message = "IncorrectPriceValueException", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}