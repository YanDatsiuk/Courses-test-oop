<?php

namespace YanDatsyuk\Courses\RateTypes;

use YanDatsyuk\Courses\Contracts\RateType;
use YanDatsyuk\Courses\Exceptions\IncorrectDurationValueException;
use YanDatsyuk\Courses\Exceptions\IncorrectPriceValueException;

/**
 * Class RateHourly
 * @package YanDatsyuk\Courses\RateTypes
 */
class RateHourly implements RateType
{
    /**
     * @param float $price
     * @param float $duration
     * @return float
     * @throws IncorrectDurationValueException
     * @throws IncorrectPriceValueException
     */
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