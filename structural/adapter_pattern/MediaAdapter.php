<?php

class MediaAdapter implements Mediaplayer
{
    private $advanceMediaPlayer;

    public function __construct($audioType)
    {
        if ($audioType == "vlc") {
            $this->advanceMediaPlayer = new VlcPlayer;
        } else if ($audioType == "mp4") {
            $this->advanceMediaPlayer = new Mp4Player;
        }
    }

    public function play($audioType, $fileName)
    {
        if ($audioType == "vlc") {
            $this->advanceMediaPlayer->play($fileName);
        } else if ($audioType == "mp4") {
            $this->advanceMediaPlayer->play($fileName);
        }
    }
}