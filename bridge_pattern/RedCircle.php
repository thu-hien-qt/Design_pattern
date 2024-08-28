<?php
class RedCircle implements DrawAPI
{
    public function drawCircle(int $radius, int $x, int $y)
    {
        echo "Drawing Circle[ color: red, radius: $radius, x: $x, y: $y]";
    }
}