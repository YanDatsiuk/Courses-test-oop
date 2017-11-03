<?php

namespace YanDatsyuk\Courses\RateTypes;

use YanDatsyuk\Courses\Contracts\Lesson;
use YanDatsyuk\Courses\Contracts\RateType;

class RateFixed implements RateType
{

    public function calculatePrice(Lesson $lesson): float
    {
        // TODO: Implement calculatePrice() method.
    }
}