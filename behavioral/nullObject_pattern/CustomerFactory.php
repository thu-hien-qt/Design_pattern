<?php

class CustomerFactory
{
    private $names = ["Rob", "Joe", "Julie"];
    public function getCustomer($name)
    {
        for($i= 0; $i < count($this->names); $i++) {
            if ($this->names[$i] == $name)  {
                return new RealCustomer($name);
            }
        }
        return new NullCustomer;
    }
}