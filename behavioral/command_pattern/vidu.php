<?php
include "Stock.php";
include "Broker.php";
include "Order.php";
include "BuyStock.php";
include "SellStock.php";

$abcStock = new Stock();

$buy = new BuyStock($abcStock);
$sell = new SellStock($abcStock);

$broker = new Broker();
$broker->takeOder($buy);
$broker->takeOder($sell);

$broker->placeOrder();