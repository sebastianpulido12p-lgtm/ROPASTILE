<?php

class Database
{
    private $host = "localhost";
    private $port = "3306";
    private $dbname= "ropastile";
    private $username = "root";
    private $password = "";

    public function conectar () {
        return new PDO(
            "mysql:host={$this->host};dbname={$this->dbname}",
            $this->username,
            $this->password
        );
    }
}   