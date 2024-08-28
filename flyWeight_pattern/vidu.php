<?php

namespace fly;
require "Shape.php";
require "Circle.php";
require "ShapeFactory.php";

$colors = ["red", "blue", "black", "green", "white"];
$circleFactory = new ShapeFactory;
for($i = 0; $i<20; $i++) {
    $circle = $circleFactory->getCircle($colors[array_rand($colors)]);
    $circle->setX($i);
    $circle->setY($i);
    $circle->setRadius(20);
    $circle->draw();
}
