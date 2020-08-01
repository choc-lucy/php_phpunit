<?php

namespace Tddbc;

use PHPUnit\Framework\TestCase;

class CompareClosedRangesTest extends TestCase
{
    // /**
    //  * @var Example
    //  */
    // protected $sut;

    /**
     * @test
     */
    public function _2つのClosedRangeオブジェクトの下端点と上端点が等しいことを判定する()
    {
        $closedRange1 =
        $sut = new CompareClosedRanges();
        $this->assertTrue($sut->isEqual($closedRange1, $closedRange2));
    }
}
