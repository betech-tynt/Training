<?php

class User extends Business
{
    protected $table = 'Snake';

    public function getUserDetail()
    {
        return $this->getDetail();
    }
}