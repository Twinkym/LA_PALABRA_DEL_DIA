<?php

class Database {
    private $pdo;

    public function __construct($config) {
        $this -> pdo = new PDO("mysql:host=" . $config['host'] . ";dbname=" . $config['dbname'], $config['user'], $config['password']);
    }

    public function query($sql, $params = []) {
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($params);
        return $stmt;
    }
}