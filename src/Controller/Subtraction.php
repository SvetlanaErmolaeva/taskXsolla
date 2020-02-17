<?php

namespace App\Controller;

use Brick\Math\BigDecimal;

class Subtraction extends Calculate
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

    function calculateSub($operandOne, $operandTwo)
    {
        return BigDecimal::of($operandOne)->minus($operandTwo);
    }
}