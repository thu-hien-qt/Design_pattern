<?php

namespace decorator;

require_once "Shape.php";
require_once "Circle.php";
require_once "Rectangle.php";
require_once "ShapeDecorator.php";
require_once "RedShapeDecorator.php";

$circle = new Circle();

$redCircle = new RedShapeDecorator(new Circle());

$redRectangle = new RedShapeDecorator(new Rectangle());
$circle->draw();
$redCircle->draw();
$redRectangle->draw();
