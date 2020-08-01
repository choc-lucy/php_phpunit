<?php

namespace Tddbc;

use Exception;
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
    }

    /**
     * @test
     * "[3,8]"を返す
     */
    public function _3_8を引数に与えれば､決められたフォーマットの文字列を返す()
    {
        $sut = new ClosedRange(1, 4);
        $this->assertEquals("[3,8]", $sut->getFormattedClosedRange(3, 8));
    }

    /**
     * @test
     * @expectedExceptionMessage not int argument
     */
    public function 整数以外を引数に渡すとExceptionを返す()
    {
        $sut = new ClosedRange(1, 4);
        $sut->getFormattedClosedRange('3','8');
        $this->assertTrue(true);
    }

    /**
     * @test
     */
    public function 引数で渡した整数が下端点よりも大きく､上端点よりも小さいことが判定できる()
    {
        $sut = new ClosedRange(1, 4);
        $this->assertTrue($sut->isIncludedClosedRange(3));
    }
}
