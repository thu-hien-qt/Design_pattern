<?php
class GreenCircle implements DrawAPI
{
    public function drawCircle(int $radius, int $x, int $y)
    {
        echo "Drawing Circle[ color: green, radius: $radius, x: $x, y: $y.";
    }
}