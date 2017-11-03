<?php

namespace YanDatsyuk\Courses\RateTypes;

use YanDatsyuk\Courses\Contracts\RateType;
use YanDatsyuk\Courses\Exceptions\IncorrectPriceValueException;

/**
 * Class RateFixed
 * @package YanDatsyuk\Courses\RateTypes
 */
class RateFixed implements RateType
{

    /**
     * @param float $price
     * @param float $duration
     * @return float
     * @throws IncorrectPriceValueException
     */
    public function calculatePrice(float $price, float $duration): float
    {
        //validate price
        if (is_null($price) || ($price < 0)) {
            throw new IncorrectPriceValueException();
        }

        return $this->price;
    }
}