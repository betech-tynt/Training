<?php
// include("./classes/Calculator.php");
// include_once("./classes/Calculator.php");
// require './classes/Calculator.php';
require_once("./classes/Calculator.php");

$calc = new Calculator;

$calc->setNumberA(30);
$calc->setNumberB(30);

// $total = $calc->makeAdd($calc->getNumberA(), $calc->getNumberB());
$total = $calc->makeMinus(123,78);
$calc->showShortResult($total);

echo "<hr>";

$calc->setUsername("snake102@gmail.com");
$calc->setPassword("Snake102");

echo $calc->getUsername();
echo "<br/>";
echo $calc->getPassword();

echo "<hr>";

echo $calc->makeMultiply(5,5);

echo "<hr>";


