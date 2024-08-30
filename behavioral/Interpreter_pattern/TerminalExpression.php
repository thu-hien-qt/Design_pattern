<?php

class TerminalExpression implements Expression
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function interpret($context = null)
    {
        if($context) {
            return true;
        }
        return false;
    }
}