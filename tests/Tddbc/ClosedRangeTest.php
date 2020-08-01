<?php

namespace Tddbc;

use PHPUnit\Framework\TestCase;

class ClosedRangeTest extends TestCase
{
    /**
     * @var Example
     */
    protected $sut;

    /**
     * {@inheritdoc}
     */
    protected function setUp() : void
    {
        $this->sut = new ClosedRange();
    }

    /**
     * @test
     * "[3,8]"を返す
     */
    public function _3_8を引数に与えれば､決められたフォーマットの文字列を返す()
    {
        $this->assertEquals("[3,8]", $this->sut->getFormattedClosedRange(3, 8));
    }

    /**
     * @test
     */
    public function 整数以外を引数に渡すとExceptionを返す()
    {
        $this->expectExceptionObject($this->sut->getFormattedClosedRange('3','8'));
    }
}
