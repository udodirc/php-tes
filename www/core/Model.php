<?php

namespace core;

use core\Database;
use PDO;

class Model
{
    private PDO $db;

    public function __construct() {
        $this->db = Database::getInstance();  // Get the singleton DB instance
    }

    public function fetch(string $query): array|false
    {
        $stmt = $this->db->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
}