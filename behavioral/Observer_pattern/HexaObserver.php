<?php

class HexaObserver extends Observer
{
    public function __construct(Subject $subject)
    {
        $this->subject = $subject;
        $this->subject->attach($this);
    }

    public function update() {
        echo "Hexa String: ". dechex($this->subject->getState())."<br>";
    }
}