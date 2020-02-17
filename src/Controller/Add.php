<?php

namespace App\Controller;

use Brick\Math\BigDecimal;

class Add extends Calculate
{

    private $operandThree;

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

    public function setOperandThree(BigDecimal $operandThree)
    {
        $this->operandThree = $operandThree;
    }

    public function getOperandThree()
    {
        return $this->operandThree;
    }

    function calculateAdd($operandOne, $operandTwo)
    {
        return BigDecimal::of($operandOne)->plus($operandTwo);
    }
    function calculateAddforThree($operandOne, $operandTwo, $operandThree)
    {
        return BigDecimal::of($operandOne)->plus($operandTwo)->plus($operandThree);
    }
}