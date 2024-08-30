<?php

include "AbstractLogger.php";
include "ConsoleLogger.php";
include "ErrorLoger.php";
include "FileLogger.php";
include "ChainPattern.php";

$loggerChain = new ChainPattern;
$logger = $loggerChain->getChainOfLogger();

$logger->logMessage(AbstractLogger::$ERROR, "This is an information.");

