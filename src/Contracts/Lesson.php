<?php

namespace YanDatsyuk\Courses\Contracts;

/**
 * Interface Lesson
 * @package YanDatsyuk\Courses\Contracts
 */
interface Lesson
{
    /**
     * Calculate total price for a lesson.
     * Price depends on rate type of this lesson.
     *
     * @return float
     */
    public function getTotalPrice(): float;

    /**
     * Getter and setter for a price
     * @return float
     */
    public function getPrice(): float;

    public function setPrice($price);

    /**
     * Getter and setter for a duration
     * @return float
     */
    public function getDuration(): float;

    public function setDuration($duration);

    /**
     * Getter and setter for a rate type
     * @return string
     */
    public function getRateType(): string;

    public function setRateType(string $rateType);
}