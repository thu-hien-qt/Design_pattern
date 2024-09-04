<?php

include "Strategy.php";
include "Context.php";
include "OperationMultiply.php";
include "OperationAdd.php";
include "OperationSubstract.php";

$context = new Context(new OperationAdd());
echo "10 + 5 = " . $context->executeStrategy(10, 5) . "<br>";

$context = new Context(new OperationSubstract());
echo "10 - 5 = " . $context->executeStrategy(10, 5) . "<br>";

$context = new Context(new OperationMultiply());
echo "10 * 5 = " . $context->executeStrategy(10, 5) . "<br>";
