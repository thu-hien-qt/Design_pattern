<?php

class People 
{
    private $people = [];
    public function add(Person $person)
    {
        $this->people[] = $person;
    }
    public function getPeople()
    {
        return $this->people;
    }
}