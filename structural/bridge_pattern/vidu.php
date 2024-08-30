<?php

require_once "DrawAPI.php";
require_once "Shape.php";
require_once "Redcircle.php";
require_once "GreenCircle.php";
require_once "Circle.php";
$redCircle = new Circle(20, 20, 10, new RedCircle);
$redCircle->draw();