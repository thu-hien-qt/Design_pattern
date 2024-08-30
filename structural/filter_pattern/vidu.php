<?php
include_once "People.php";
include_once "Person.php";
include_once "Criteria.php";
include_once "CriteriaMale.php";
include_once "CriteriaFeMale.php";
include_once "CriteriaSingle.php";
include_once "AndCriteria.php";
include_once "OrCriteria.php";

$people = new People();
$people->add(new Person("Hien", "female", "single"));
$people->add(new Person("Nam", "male", "married"));
$people->add(new Person("Phong", "male", "single"));

$male = new CriteriaMale();
$single = new CriteriaSingle();
// print_r($single);
$female = new CriteriaFemale();
