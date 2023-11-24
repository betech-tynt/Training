<?php

class Calculator
{
    // Khai báo thuộc tính

    private $username = "Monster Snakes";
    private $password = "Snake";
    public $numberA;
    public $numberB;

    // Hàm khởi tạo
    public function __construct()
    {
        echo "Hàm khởi tạo"."<hr>";
    }

    //Phương thức gán giá trị cho thuộc tính
    public function setNumberA($valueA)
    {
        $this->numberA = $valueA;
    }
    public function setNumberB($valueB)
    {
        $this->numberB = $valueB;
    }

    //Phương thức lấy giá trị thuộc tính numberA
    public function getNumberA()
    {
        return $this->numberA;
    }

    public function getNumberB()
    {
        return $this->numberB;
    }
    // Khai báo hằng số
    const _CONTENT = "Kết quả là: {value}";

    // Khai báo phương thức
    function makeAdd($valueA = 0, $valueB = 0)
    {
        if ($valueA == 0)
        {
            $valueA = $this->numberA;
        }
        if ($valueB == 0) {
            $valueB = $this->numberB;
        }
        $result = $valueA + $valueB;
        return $result;
    }

    public function makeMinus($valueA, $valueB)
    {
        $result = $valueA - $valueB;
        return $result;
    }

    public function makeMultiply($valueA, $valueB)
    {
        $result = $valueA * $valueB;
        return $result;
    }

    public function makeDivide($valueA, $valueB)
    {
        if ($valueB > 0)
        {
            $result = $valueA / $valueB;
            return $result;
        }
        else
        {
            return "Không chia cho số 0";
        }
    }

    public function showResult($smg, $value)
    {
        echo str_replace("{value}", $value, $smg);
    }

    public function showShortResult($value)
    {
        $smg = $this::_CONTENT;
        $this->showResult($smg, $value);
    }

    public function demoThis()
    {
        return $this;
    }

    public function setUsername($name)
    {
        $this->username = $name;
    }

    public function setPassword($pass)
    {
        $this->password = $pass;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getPassword()
    {
        return $this->password;
    }

    // Hàm huỷ
    public function __destruct()
    {
        echo "<hr> Hàm huỷ" . "<hr>";
    }
}