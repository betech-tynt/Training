<?php

class Person
{
    public static $fullname = 'Snake';
    public static $age = 30;

    public $location = 'SG';

    public static $person;

    public function __construct()
    {
        self::$person = $this;
    }

    public function getMessage()
    {
        return "Tài khoản của bạn là: ";
    }

    public static function getName()
    {
        echo self::$person->getMessage();

        echo "What your name: " . self::$fullname . "<br>";
        echo "Địa điểm: " . self::$person->location . "<br>";
    }

    public function getAge()
    {
        // echo self::getMessage();
        echo "Địa điểm: " . $this->location . "<br>";
        echo "What your age: " . self::$age;	
    }
}