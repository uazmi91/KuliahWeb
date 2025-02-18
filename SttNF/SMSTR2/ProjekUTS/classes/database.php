<?php
class Database
{
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "db_ecommers";
    private $connection;

    public function __construct()
    {
        $this->connection = mysqli_connect($this->host, $this->username, $this->password, $this->database);

        if (!$this->connection) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            exit();
        }
    }

    public function getConnection()
    {
        return $this->connection;
    }
}