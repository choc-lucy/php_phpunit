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
     * "[下端点, 上端点]"を返す
     */
    public function _3_8を引数に与えれば､決められたフォーマットの文字列を返す()
    {
        $sut = new ClosedRange(3, 8);
        $this->assertEquals("[3,8]", strval($sut));
    }

    /**
     * @test
     * @expectedExceptionMessage not int argument
     * @doesNotPerformAssertions
     * // Exceptionが投げられることのみテストしたかったため
     */
    public function 整数以外を引数に渡すとExceptionを返す()
    {
        $sut = new ClosedRange('3','8');
    }

    /**
     * @test
     */
    public function 引数で渡した整数が下端点以上かつ上端点以下であることが判定できる()
    {
        $sut = new ClosedRange(1, 4);
        $this->assertTrue($sut->isIncludedClosedRange(3));
    }

    /**
     * @test
     */
    public function 別の閉区間と下端点と上端点が等しいことを判定する()
    {
        $sut = new ClosedRange(1, 4);
        $target = new ClosedRange(1, 4);
        $this->assertTrue($sut->isEqual($target));
    }

    /**
     * @test
     */
    public function 別の閉区間と下端点と上端点が等しくないことを判定する()
    {
        $sut = new ClosedRange(3, 8);
        $target = new ClosedRange(1, 4);
        $this->assertFalse($sut->isEqual($target));
    }

    /**
     * @test
     */
    public function 別の区間が完全に含まれるかを判定する()
    {
        $sut = new ClosedRange(3, 8);
        $target = new ClosedRange(4,6);
        $this->assertTrue($sut->isInclude($target));
    }
}
