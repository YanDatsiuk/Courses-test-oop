<?php

namespace YanDatsyuk\Courses\Exceptions;

use Throwable;

/**
 * Created by PhpStorm.
 * User: datsyuk
 * Date: 02.11.17
 * Time: 13:24
 */
class UnknownRateTypeException extends \Exception
{
    public function __construct($message = "UnknownRateTypeException", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}