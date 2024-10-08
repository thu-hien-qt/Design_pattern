<?php

class Context {
    private $strategy;

    public function __construct(Strategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function executeStrategy($num1, $num2) {
        return $this->strategy->doOperation($num1, $num2);
    }
}