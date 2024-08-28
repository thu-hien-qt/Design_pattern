<?php

namespace facade;

class Square implements Shape
{
    public function draw()
    {
        echo "Square::draw()";
    }
}