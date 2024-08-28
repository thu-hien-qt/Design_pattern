<?php

class AudioPlayer implements Mediaplayer
{
    private $mediaAdapter;

    public function play($audioType, $fileName)
    {
        if ($audioType == "mp3") {
            echo "Playing mp3 file. Name: ". $fileName."<br>";
        } elseif ($audioType == "vlc" || $audioType == "mp4") {
            $mediaAdapter = new MediaAdapter($audioType);
            $mediaAdapter->play($audioType, $fileName);
        } else {
            echo "Invalid media. ".$audioType . " format not supported.";
        }
    }
}