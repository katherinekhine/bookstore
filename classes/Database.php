<?php

namespace classes;

use PDO;
use PDOException;

class Database
{
    private $dbhost;
    private $dbname;
    private $dbusername;
    private $dbpassword;
    private $conn;

    public function __construct($dbhost = "localhost", $dbname = "bookstore", $dbusername = "root", $dbpassword = "")
    {
        $this->dbhost = $dbhost;
        $this->dbname = $dbname;
        $this->dbusername = $dbusername;
        $this->dbpassword = $dbpassword;
    }

    public function connect()
    {
        try {
            $this->conn = new PDO("mysql:host=$this->dbhost;dbname=$this->dbname", $this->dbusername, $this->dbpassword);
            return $this->conn;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}


// for testing
$db = new Database();
// print_r($db);
// echo "<br>";
// print_r($db->connect());
