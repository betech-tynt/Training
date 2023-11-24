<?php

class Database
{
    protected $table;

    public function __construct()
    {
        echo "Kết nối Database <br>";
    }

    public function fetch()
    {
        return "Lấy dữ liệu từ table ".$this->table."<br>";
    }
}