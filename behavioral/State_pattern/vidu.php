<?php
include "Context.php";
include "State.php";
include "StartState.php";
include "StopState.php";

$context = new Context();

$startState = new StartState();
$startState->doAction($context);

echo $context->getState()->toString();

$stopState = new StopState();
$stopState->doAction($context);

echo $context->getState()->toString();
