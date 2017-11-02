<?php

namespace YanDatsyuk\Courses\Core;

use YanDatsyuk\Courses\Concerns\IsLesson;
use YanDatsyuk\Courses\Contracts\Lesson as ILesson;

abstract class Lesson implements ILesson
{
    use IsLesson;

    /**
     * Lesson constructor.
     *
     * @param int $price
     * @param int $duration
     * @param string $rateType
     */
    public function __construct($price = 0, $duration = 0, $rateType = RateType::FIXED)
    {
        $this->setPrice($price);
        $this->setDuration($duration);
        $this->setRateType($rateType);
    }

    /**
     * Add possibility to "setters" methods chaining
     *
     * @param $name
     * @param $value
     * @return $this
     */
    public function __set($name, $value)
    {
        $methodName = 'set' . ucfirst($value);
        if (method_exists($this, $methodName)) {
            $this->$methodName($value);
            return $this;
        }
    }

}