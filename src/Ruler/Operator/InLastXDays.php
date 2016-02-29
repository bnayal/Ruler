<?php

namespace Ruler\Operator;


use Ruler\Context;
use Ruler\Proposition;
use Ruler\VariableOperand;

class InLastXDays extends VariableOperator implements Proposition
{
    public function evaluate(Context $context)
    {
        /** @var VariableOperand $left */
        /** @var VariableOperand $right */
        list($left, $right) = $this->getOperands();

        return $left->prepareValue($context)->inLastXDays($right->prepareValue($context));
    }

    protected function getOperandCardinality()
    {
        return static::BINARY;
    }
}