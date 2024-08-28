<?php

class Meal 
{
    private $items = [];

    public function addItem(Item $item)
    {
        $this->items[] = $item;
    }

    public function getCost()
    {
        $cost = 0;
        foreach($this->items as $item)
        {
            $cost += $item->price();
        }
        return $cost;
    }

    public function showItems()
    {
       foreach($this->items as $item)
       { 
        echo "Item: ". $item->name() . ", Parking: " . $item->packing()->pack() . ", Price: " . $item->price() . "<br>";
       }
    }

}