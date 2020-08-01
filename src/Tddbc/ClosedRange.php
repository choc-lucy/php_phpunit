<?php

namespace Tddbc;

class ClosedRange
{
    public function getFormattedClosedRange(int $lowerEndPoint, int $upperEndPoint): string
    {
        return "[". $lowerEndPoint.",". $upperEndPoint. "]";
    }
}
