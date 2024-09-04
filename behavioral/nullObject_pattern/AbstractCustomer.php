<?php

abstract class AbstractCustomer {
    protected $name;
    public abstract function isNil();
    public abstract function getName();
}