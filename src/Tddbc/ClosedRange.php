<?php

namespace Tddbc;

use Exception;

class ClosedRange
{
    private int $lowerEndPoint;
    private int $upperEndPoint;

    public function __construct(int $lowerEndPoint, int $upperEndPoint)
    {
        $this->lowerEndPoint = $lowerEndPoint;
        $this->upperEndPoint = $upperEndPoint;
    }

    public function getFormattedClosedRange(int $lowerEndPoint, int $upperEndPoint): string
    {
        if (!(is_int($lowerEndPoint) && is_int($upperEndPoint))) {
            throw new Exception();
        }
        return "[". $lowerEndPoint.",". $upperEndPoint. "]";
    }

    public function isIncludedClosedRange(int $targetPoint): bool
    {
        return true;
    }
}
