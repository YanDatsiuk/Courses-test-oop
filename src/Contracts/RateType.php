<?php

namespace YanDatsyuk\Courses\Contracts;


/**
 * Class RateType
 * @package YanDatsyuk\Courses\Core
 */
interface RateType
{
    /**
     * Calculate total price for a lesson.
     * Each rate type should have own implementation.
     * todo How to pass "Lesson" interface as argument?
     * @param float $price
     * @param float $duration
     * @return float
     */
    public function calculatePrice(float $price, float $duration): float;
}