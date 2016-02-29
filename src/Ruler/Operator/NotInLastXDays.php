<?php
/**
 * Created by PhpStorm.
 * User: angelg
 * Date: 2/25/2016
 * Time: 12:03 PM
 */

namespace Ruler\Operator;


use Ruler\Context;
use Ruler\Proposition;
use Ruler\VariableOperand;

class NotInLastXDays extends VariableOperator implements Proposition
{
    public function evaluate(Context $context)
    {
        /** @var VariableOperand $left */
        /** @var VariableOperand $right */
        list($left, $right) = $this->getOperands();

        return $left->prepareValue($context)->inLastXDays($right->prepareValue($context)) === false;
    }

    protected function getOperandCardinality()
    {
        return static::BINARY;
    }
}