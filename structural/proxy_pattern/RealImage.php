<?php

class RealImage implements Image
{
    private $fileName;

    public function __construct($fileName)
    {
        $this->fileName = $fileName;
    }

    public function display()
    {
        echo "Displaying ".$this->fileName;
    }

    public function loadFromDisk($fileName)
    {
        echo "Loading ".$this->fileName;
    }
}