<?php

namespace YanDatsyuk\Courses\Contracts;


interface Lesson
{
    public function getTotalPrice(): float;

    public function getPrice(): float;

    public function setPrice($price);

    public function getDuration(): float;

    public function setDuration($duration);

    public function getRateType(): string;

    public function setRateType(string $rateType);
}