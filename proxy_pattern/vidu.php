<?php

include "Image.php";
include "RealImage.php";
include "ProxyImage.php";

$image = new ProxyImage("test.jpg");
$image->display();
