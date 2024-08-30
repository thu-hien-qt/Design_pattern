<?php

class FileLogger extends AbstractLogger
{
    public function __construct($level)
    {
        $this->level = $level;
    }

    protected function write($message)
    {
        echo "File Console::Logger: ".$message;
    }
}