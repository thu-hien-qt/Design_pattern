<?php

class StopState implements State 
{
    public function doAction(Context $context)
    {
        echo "Player is in stop state <br>";
        $context->setState($this);
    }

    public function toString()
    {
        echo "Stop State <br>";
    }
}