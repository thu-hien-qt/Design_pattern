<?php
abstract class AbstractLogger
{
    public static $INFO = 1;
    public static $DEBUG = 2;
    public static $ERROR = 3;

    protected $level;
    protected $nextLogger;

    public function setNextLogger(AbstractLogger $nextLogger)
    {
        $this->nextLogger = $nextLogger;
    }

    abstract protected function write($message);

    public function logMessage($level, $message)
    {
        if ($this->level <= $level)
        {
            $this->write($message);
        }
        if ($this->nextLogger != null){
            $$this->nextLogger->logMessage($level, $message);
        }
    }
}

