<?php

namespace YanDatsyuk\Courses\RateTypes;

use YanDatsyuk\Courses\Contracts\RateType;
use YanDatsyuk\Courses\Exceptions\IncorrectPriceValueException;

class RateFixed implements RateType
{

    public function calculatePrice(float $price, float $duration): float
    {
        //validate price
        if (is_null($price) || ($price < 0)) {
            throw new IncorrectPriceValueException();
        }

        return $this->price;
    }
}