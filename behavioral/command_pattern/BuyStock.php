<?php

class BuyStock implements Order
{
    private $abcStock;
    public function __construct(Stock $abcStock)
    {
       $this->abcStock = $abcStock; 
    }

    public function execute()
    {
        $this->abcStock->buy();
    }
}