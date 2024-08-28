<?php

class Circle extends Shape
{
    private $x;
    private $y;
    private $radius;

    public function __construct($x, $y, $radius, DrawAPI $drawAPI)
    {
        $this->drawAPI = $drawAPI;
        $this->x = $x;
        $this->y = $y;
        $this->radius = $radius;
    }

    public function draw()
    {
        $this->drawAPI->drawCircle($this->radius, $this->x, $this->y);
    }
}