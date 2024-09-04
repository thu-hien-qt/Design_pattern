<?php

class Cricket extends Game
{
    public function endPlay() {
        echo "Cricket Game Finished! <br>";
    }

    public function initialize()
    {
        echo "Cricket Game Initialized! start playing.<br>";
    }

    public function startPlay()
    {
        echo "Cricket Game Started. Enjoy the game! <br>";
    }
}