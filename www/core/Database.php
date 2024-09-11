<?php
namespace core;

use PDO;
use PDOException;

class Database {
    private static $instance = null;
    private $connection;

    private $host = 'mysql';  // DB host
    private $dbname = 'test'; // DB name
    private $username = 'test'; // DB username
    private $password = 'test'; // DB password

    private function __construct() {
        try {
            $this->connection = new PDO(
                "mysql:host=$this->host;dbname=$this->dbname",
                $this->username,
                $this->password
            );
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Database connection error: " . $e->getMessage());
        }
    }

    // The singleton method to get the database instance
    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new Database();
        }
        return self::$instance->connection;
    }
}
