<?php

namespace Tddbc;

use Exception;

class ClosedRange
{
    private int $lowerEndPoint;
    private int $upperEndPoint;

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
}
