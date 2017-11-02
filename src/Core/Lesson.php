<?php

namespace YanDatsyuk\Courses\Core;

use YanDatsyuk\Courses\Concerns\IsLesson;
use YanDatsyuk\Courses\Contracts\Lesson as ILesson;

abstract class Lesson implements ILesson
{
    use IsLesson;

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