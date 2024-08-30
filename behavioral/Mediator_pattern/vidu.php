<?php
include "User.php";
include "ChatRoom.php";

$robert = new User("Robert");
$john = new User("John");

$robert->sendMessage("hello John");
$john->sendMessage("hi Robert");