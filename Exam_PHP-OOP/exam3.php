<?php

require_once("./classes/Person.php");

$person = new Person();

// echo $person->getName();
echo "<br>";
echo Person::getName();
echo "<br>";
echo Person::$fullname;
echo "<br>";
echo Person::$age;
echo "<br>";
echo "<br>";
echo $person->location;
echo "<br>";
echo $person->getAge();