<?php

namespace App\controllers;

use App\core\Database;
use App\models\Phrase;

// require 'models/phrase.php';

class PhraseController {
    private $phraseModel;

    public function __construct($db) {
        $config = require __DIR__ . '/BACKEND/config/config.php';
        $db = new Database($config);
        $this->phraseModel = new Phrase($db);
    }

    public function index() {
        $phrases = $this->phraseModel->getAll();
        header('Content-Type: application/json');
        echo json_encode($phrases);
    }
}