<?php
namespace decorator;

abstract class ShapeDecorator implements Shape 
{
    protected Shape $decoratedShape;

    public function __construct(Shape $decoratedShape)
    {
        $this->decoratedShape = $decoratedShape;
    }

    public function draw()
    {
        $this->decoratedShape->draw;
    }
}