<?php
class Database
{
    public static $host = 'localhost';
    public static $dbname = 'smt';
    public static $usernamedb = 'root';
    public static $passworddb = '';
    public $conn;
    public function connect()
    {
        $this->conn = new mysqli(self::$host, self::$usernamedb, self::$passworddb, self::$dbname);
    }

}