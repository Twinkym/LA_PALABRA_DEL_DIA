<?php

namespace App\models;

use App\core\Database;

class Phrase {
    private $db;

    public function __construct(Database $db) {
        $this->db = $db;
    }

    public function getAll() {
        return $this->db->query("SELECT * FROM phrases");   
    }
}