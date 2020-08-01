<?php

namespace Tddbc;

use Exception;

class ClosedRange
{
    public function getFormattedClosedRange(int $lowerEndPoint, int $upperEndPoint): string
    {
        if (!is_int($lowerEndPoint) || !is_int($upperEndPoint)) {
            throw new Exception();
        }
        return "[". $lowerEndPoint.",". $upperEndPoint. "]";
    }
}
