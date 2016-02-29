<?php
/**
 * Created by PhpStorm.
 * User: angelg
 * Date: 2/24/2016
 * Time: 10:27 AM
 */

namespace Ruler\Operator;


use Ruler\Context;
use Ruler\Proposition;

class BooleanValue implements Proposition
{
    protected $value;

    public function __construct($value)
    {
        if (! is_bool($value)) {
            throw new \LogicException('The value is not boolean!');
        }

        $this->value = $value;
    }

    public function evaluate(Context $context)
    {
        return $this->value;
    }

    public function getValue()
    {
        return $this->value;
    }
}