<?php

namespace YanDatsyuk\Courses\Core;

/**
 * Class PriceCalculator
 * @package YanDatsyuk\Courses\Core
 */
class PriceCalculator
{
    /**
     * Calculate total price
     * for all lessons, provided as array.
     *
     * @param \YanDatsyuk\Courses\Contracts\Lesson[] $lessons
     * @return float
     */
    public function getTotalPrice(array $lessons): float
    {
        $total = 0;
        foreach ($lessons as $lesson) {
            $total += $lesson->getTotalPrice();
        }

        return $total;
    }

}