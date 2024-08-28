<?php

abstract class Burger implements Item
{
    public function packing()
    {
        return new Wrapper();
    }

    public abstract function price();
}