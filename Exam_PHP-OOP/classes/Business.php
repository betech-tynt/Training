<?php

class Business extends Database
{
    // protected $table = 'Snake';

    public function getDetail()
    {
        // $this->table = 'Snake';

        return $this->fetch();
    }

    // public function fetch()
    // {
    //     return "fetch từ class Business <br>".parent::fetch();
    // }
}