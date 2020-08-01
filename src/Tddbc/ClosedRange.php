<?php

namespace Tddbc;

use Exception;

class ClosedRange
{
    public int $lowerEndPoint;
    public int $upperEndPoint;

    public function __construct(int $lowerEndPoint, int $upperEndPoint)
    {
        if (!(is_int($lowerEndPoint) && is_int($upperEndPoint))) {
            throw new Exception();
        }
        $this->lowerEndPoint = $lowerEndPoint;
        $this->upperEndPoint = $upperEndPoint;
    }

    public function __toString()
    {
        return "[". $this->lowerEndPoint.",". $this->upperEndPoint. "]";
    }

    public function isIncludedClosedRange(int $targetPoint): bool
    {
        return $this->lowerEndPoint <= $targetPoint && $targetPoint <= $this->upperEndPoint;
    }

    public function isEqual(ClosedRange $target): bool
    {
        return $this->lowerEndPoint === $target->lowerEndPoint
        && $this->upperEndPoint === $target->upperEndPoint;
    }
}
