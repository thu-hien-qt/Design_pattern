<?php

class MealBuilder
{
    public function prepareVegMeal()
    {
        $meal = new Meal();
        $vegBurger = new VegBurger();
        $meal->addItem($vegBurger);
        $coke = new Coke();
        $meal->addItem($coke);
        return $meal;
    }

    public function prepareNonVegMeal()
    {
        $meal = new Meal();
        $chickenBurger = new ChickenBurger();
        $meal->addItem($chickenBurger);
        $pepsi = new Pepsi();
        $meal->addItem($pepsi);
        return $meal;
    }
}