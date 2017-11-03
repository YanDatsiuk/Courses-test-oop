<?php

namespace YanDatsyuk\Courses\Contracts;


/**
 * Class RateType
 * @package YanDatsyuk\Courses\Core
 */
interface RateType
{
    public function calculatePrice(Lesson $lesson):float;
}