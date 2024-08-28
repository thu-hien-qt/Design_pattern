<?php
include "Packing.php";
include "Item.php";
include "Meal.php";
include "Burger.php";
include "Wrapper.php";
include "ColdDrink.php";
include "Bottle.php";
include "VegBurger.php";
include "ChickenBurger.php";
include "Coke.php";
include "MealBuilder.php";

include "Pepsi.php";
$mealBuilder = new MealBuilder();
$meal = $mealBuilder->prepareNonVegMeal();

$meal->showItems();