<?php

namespace YanDatsyuk\Courses\Concerns;

use YanDatsyuk\Courses\Core\RateType;
use YanDatsyuk\Courses\Exceptions\UnknownRateTypeException;

/**
 * Created by PhpStorm.
 * User: datsyuk
 * Date: 02.11.17
 * Time: 13:05
 */
trait IsLesson
{
    //lesson duration
    private $duration;

    //type of this lesson
    private $rateType;

    //
    private $price;


    /**
     * Calculate price for a lesson.
     * Price depends on rate type of this lesson.
     *
     * @return float
     * @throws UnknownRateTypeException
     */
    public function getPrice(): float
    {
        switch ($this->rateType) {
            case RateType::FIXED:
                return $this->_calculatePriceForFixedRate();
                break;

            case RateType::HOURLY:
                return $this->_calculatePriceForHourlyRate();
                break;

            default:
                throw new UnknownRateTypeException();
        }
    }

    private function _calculatePriceForFixedRate(): float
    {
        return $this->price;
    }

    private function _calculatePriceForHourlyRate(): float
    {
        return $this->price * $this->duration;
    }
}