<?php

namespace facade;

require_once "Shape.php";
require_once "Circle.php";
require_once "Rectangle.php";
require_once "Square.php";
require_once "ShapeMaker.php";

$shapeMaker = new ShapeMaker();

$shapeMaker->drawCircle();
$shapeMaker->drawRectangle();
$shapeMaker->drawSquare();
