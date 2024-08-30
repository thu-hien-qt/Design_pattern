<?php
namespace decorator;

class RedShapeDecorator extends ShapeDecorator
{
    public function __construct(Shape $decoratedShape)
    {
        parent::__construct($decoratedShape);
    }

    private function setRedBorder(Shape $decoratedShape)
    {
        echo "Border color: Red <br>";
    }

    public function draw()
    {
        $this->decoratedShape->draw();
        $this->setRedBorder($this->decoratedShape);
    }
}