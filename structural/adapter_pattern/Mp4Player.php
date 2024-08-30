<?php

class Mp4Player implements AdvanceMediaplayer
{
    public function play($fileName)
    {
        echo "Playing Mp4 file. Name: ". $fileName ."<br>";
    }
}