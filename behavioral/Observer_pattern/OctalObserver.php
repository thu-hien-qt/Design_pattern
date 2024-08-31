<?php

class OctalObserver extends Observer
{
    public function __construct(Subject $subject)
    {
        $this->subject = $subject;
        $this->subject->attach($this);
    }

    public function update() {
        echo "Octal String: ". decoct($this->subject->getState())."<br>";
    }
}