<?php

class OperationAdd implements Strategy
{
    public function doOperation($num1, $num2)
    {
        return $num1 + $num2 ."<br>";
    }
}