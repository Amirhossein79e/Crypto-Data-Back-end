<?php
declare(strict_types=1);

namespace crypto\model\local;
use mysqli;
use mysqli_driver;

class Database
{
    protected mysqli $mysqli;
    protected mysqli_driver $mysqliDriver;

    protected function __construct()
    {
        $this->mysqliDriver = new mysqli_driver();
        $this->mysqli = new mysqli("130.185.75.120:3306","bermoo_store","com.amirhosseinemadi.store.A7","bermoo_crypto") or http_response_code(500);
        $this->mysqli->set_charset("utf8mb4");
    }


    protected function close() : void
    {
        $this->mysqli->close();
    }

}