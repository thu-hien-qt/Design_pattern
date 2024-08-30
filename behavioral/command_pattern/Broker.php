<?php

class Broker 
{
    private $orderList = [];

    public function takeOder(Order $order)
    {
        $this->orderList[] = $order;
    }

    public function placeOrder()
    {
        foreach($this->orderList as $order)
        {
            $order->execute();
        }
        $this->orderList = [];
    }
}