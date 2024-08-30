<?php
class ChainPattern
{
    function getChainOfLogger()
    {
        $errorLogger = new ErrorLogger(AbstractLogger::$ERROR);
        $fileLogger = new FileLogger(AbstractLogger::$DEBUG);
        $consoleLogger = new ConsoleLogger(AbstractLogger::$INFO);

        $errorLogger->setNextLogger($fileLogger);
        $fileLogger->setNextLogger($consoleLogger);

        return $errorLogger;
    }
}
