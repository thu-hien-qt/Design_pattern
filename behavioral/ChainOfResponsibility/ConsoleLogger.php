<?php

class ConsoleLogger extends AbstractLogger
{
    public function __construct($level)
    {
        $this->level = $level;
    }

    protected function write($message)
    {
        echo "Standard Console::Logger: ".$message;
    }
}