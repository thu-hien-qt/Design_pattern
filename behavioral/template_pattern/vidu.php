<?php
include "Game.php";
include "Cricket.php";
include "Football.php";

$game = new Cricket();
$game->play();
$game = new Football();
$game->play();
