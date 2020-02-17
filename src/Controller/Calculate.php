<?php

namespace App\Controller;

use Brick\Math\BigDecimal;

class Calculate
{
    protected $operandOne;
    protected $operandTwo;

    public function setOperandOne(BigDecimal $operandOne)
    {
        $this->operandOne = $operandOne;
    }

    public function setOperandTwo(BigDecimal $operandTwo)
    {
        $this->operandOne = $operandTwo;
    }

    /**
     * @return mixed
     */
    public function getOperandOne()
    {
        return $this->operandOne;
    }

    /**
     * @return mixed
     */
    public function getOperandTwo()
    {
        return $this->operandTwo;
    }
}