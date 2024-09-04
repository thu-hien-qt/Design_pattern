<?php

class Football extends Game
{
    public function endPlay() {
        echo "Football Game Finished! <br>";
    }

    public function initialize()
    {
        echo "Football Game Initialized! start playing.<br>";
    }

    public function startPlay()
    {
        echo "Football Game Started. Enjoy the game! <br>";
    }
}