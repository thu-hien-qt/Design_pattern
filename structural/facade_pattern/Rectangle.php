<?php

namespace facade;

class Rectangle implements Shape
{
    public function draw()
    {
        echo "Rectangle::draw()";
    }
}