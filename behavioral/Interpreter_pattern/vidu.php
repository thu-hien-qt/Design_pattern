<?php

$robert = new TerminalExpression("Robert");
$john = new TerminalExpression("John");
$result = new OrExpression($robert, $john);