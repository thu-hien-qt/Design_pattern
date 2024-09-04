<?php

class OperationSubstract implements Strategy
{
    public function doOperation($num1, $num2)
    {
        return $num1 - $num2;
    }
}