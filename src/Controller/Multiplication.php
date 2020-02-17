<?php

namespace App\Controller;

use Brick\Math\BigDecimal;

class Multiplication extends Calculate
{

    /**
     * @param mixed $operandOne
     */
    public function setOperandOne($operandOne): void
    {
        $this->operandOne = $operandOne;
    }

    /**
     * @param mixed $operandTwo
     */
    public function setOperandTwo($operandTwo): void
    {
        $this->operandTwo = $operandTwo;
    }

    function calculateMult($operandOne, $operandTwo)
    {
        return BigDecimal::of($operandOne)->multipliedBy($operandTwo);
    }
}