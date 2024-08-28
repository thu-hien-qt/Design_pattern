<?php

class VlcPlayer implements AdvanceMediaplayer
{
    public function play($fileName)
    {
        echo "Playing vlc file. Name: ". $fileName."<br>";
    }
}