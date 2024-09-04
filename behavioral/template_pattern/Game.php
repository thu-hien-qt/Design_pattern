<?php

abstract class Game {
    public abstract function initialize();
    public abstract function startPlay();
    public abstract function endPlay();

    public final function play() 
    {
        $this->initialize();
        $this->startPlay();
        $this->endPlay();
    }
}