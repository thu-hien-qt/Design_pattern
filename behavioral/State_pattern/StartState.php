<?php

class StartState implements State 
{
    public function doAction(Context $context)
    {
        echo "Player is in start state <br>";
        $context->setState($this);
    }

    public function toString()
    {
        echo "Start State <br>";
    }
}