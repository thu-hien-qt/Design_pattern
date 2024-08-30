<?php
namespace fly;

class ShapeFactory
{
    private $circles = [];
    public function getCircle($color)
    {
        if (!isset($this->circles[$color]))
        {
            $this->circles[$color] = new Circle($color);
            echo "Creating circle of color: " . $color . "\n";
        }
        return $this->circles[$color];
    }
}