<?php

class Stock
{
    private $name = "ABC";
    private $Quantity = 10;

    public function buy()
    {
        echo "Stock [Name: ". $this->name . "Quantity: " . $this->Quantity. "] bought";
    }

    public function sell()
    {
        echo "Stock [Name: ". $this->name . "Quantity: " . $this->Quantity. "] sold";
    }
}