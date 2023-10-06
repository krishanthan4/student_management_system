<?php
class Database
{
    private $host = "localhost:3306";
    private $username = "root";
    private $pasword = "Abcd!234";
    private $database = "student_management_system_php";
    private $connection;

    public function __construct()
    {
        $this->connection = new mysqli($this->host, $this->username, $this->pasword);
        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }
    public function query($sql)
    {
        $result = $this->connection->query($sql);
        if (!$result) {
            die("Query failed: " . $this->connection->error);
        }
        return $result;
    }
    public function fetch($result)
    {
        return $result->fetch_assoc();
    }
    public function escapeString($string)
    {
        return $this->connection->real_escape_string($string);
    }
    public function close()
    {
        $this->connection->close();
    }
}


?>