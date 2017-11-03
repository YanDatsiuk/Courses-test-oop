<?php

namespace YanDatsyuk\Courses\RateTypes;

use YanDatsyuk\Courses\Contracts\RateType;
use YanDatsyuk\Courses\Exceptions\IncorrectDurationValueException;
use YanDatsyuk\Courses\Exceptions\IncorrectPriceValueException;

class RateHourly implements RateType
{

    public function calculatePrice(float $price, float $duration): float
    {
        //validate price
        if (is_null($price) || ($price < 0)) {
            throw new IncorrectPriceValueException();
        }

        //validate duration
        if (is_null($duration) || ($duration < 0)) {
            throw new IncorrectDurationValueException();
        }

        return $price * $duration;
    }
}