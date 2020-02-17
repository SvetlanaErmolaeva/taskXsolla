<?php

namespace App\Tests;

use App\Controller\Add;
use App\Controller\Multiplication;
use App\Controller\Subtraction;
use Brick\Math\BigDecimal;
use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function checkAdd(){
        $calc = new Add();
        $sum = $calc->calculateAdd(5,6);
        $this->assertSame(11, $sum);
    }

    public function checkNegative(){
        $calc = new Add();
        $sum = $calc->calculateAdd(-5,6);
        $this->assertSame(1, $sum);
    }
    public function checkAddBigDecimal(){
        $calc = new Add();
        $var1 = BigDecimal::of('12345654789723489823795283405');
        $var2 = BigDecimal::of('0.123172386178236182361823');
        $sum = $calc->calculateAdd($var1,$var2);
        $this->assertSame(BigDecimal::of('12345654789723489823795283405.123172386178236182361823'), $sum);
    }

    public function checkSub(){
        $calc = new Subtraction();
        $sub = $calc->calculateSub(5,6);
        $this->assertSame(-1, $sub);
    }

    public function checkSubBigDecimal(){
        $calc = new Subtraction();
        $var1 = BigDecimal::of('1.2345654789723489823795283405');
        $var2 = BigDecimal::of('0.123172386178236182361823');
        $sub = $calc->calculateSub($var1,$var2);
        $this->assertSame(BigDecimal::of('1.1113930927941128000177053405'), $sub);
    }

    public function checkMult(){
        $calc = new Multiplication();
        $mult = $calc->calculateMult(5,6);
        $this->assertSame(30, $mult);
    }

    public function checkMultBigDecimal(){
        $calc = new Multiplication();
        $var1 = BigDecimal::of('12345654789723489.5678');
        $var2 = BigDecimal::of('0.123172386178');
        $mult = $calc->calculateMult($var1,$var2);
        $this->assertSame(BigDecimal::of('1520643759380097.0428828159138684'), $mult);
    }
}
