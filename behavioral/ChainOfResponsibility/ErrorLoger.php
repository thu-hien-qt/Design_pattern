<?php

class ErrorLogger extends AbstractLogger
{
    public function __construct($level)
    {
        $this->level = $level;
    }

    protected function write($message)
    {
        echo "Error Console::Logger: ".$message;
    }
}