<?php

namespace app\models;

use core\Model;
use core\Database;

class UserModel extends Model
{
    private $db;

    public function __construct() {
        $this->db = Database::getInstance();  // Get the singleton DB instance
    }

    public function getUsers() {
        $stmt = $this->db->prepare("SELECT * FROM users");  // Assuming you have a 'users' table
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}