<?php

class Employee
{
    private $name;
    private $dept;
    private $salary;
    private $subordinates = [];

    public function __construct($name, $dept, $salary)
    {
        $this->name = $name;
        $this->dept = $dept;
        $this->salary = $salary;
    }

    public function add(Employee $employee)
    {
        $this->subordinates[] = $employee;
    }

    public function getSubordinates()
    {
        return $this->subordinates;
    }

    public function toString()
    {
        echo "Employee: [Name: ". $this->name. ", dept: ". $this->dept. ", salary: ". $this->salary."]<br>";
        foreach ($this->subordinates as $inferior) {
            echo "- Inferior: [Name: ". $inferior->name. ", dept: ". $inferior->dept. ", salary: ". $inferior->salary."]<br>";
        }
    }
}