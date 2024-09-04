<?php

class NullCustomer extends AbstractCustomer
{
    public function getName()
    {
        return "Not Available in Customer Database<br>";
    }

    public function isNil() {
        return true;
    }
}