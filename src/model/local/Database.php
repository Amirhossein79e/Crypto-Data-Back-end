<?php


namespace crypto\model\local;
use mysqli;

class Database
{
    protected mysqli $mysqli;

    protected function __construct()
    {
        $this->mysqli = new mysqli("localhost","*","*","*");
        $this->mysqli->set_charset("utf8mb4");
    }


    protected function close()
    {
        $this->mysqli->close();
    }

}