<?php

require_once("./classes/Database.php");

require_once("./classes/Business.php");

require_once("./classes/Users.php");

$business = new Business();

echo $business->getDetail();

echo $business->fetch();

echo "<hr>";

$user = new User();

echo $user->getUserDetail();
