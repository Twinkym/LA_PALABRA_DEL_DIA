<?php

require 'models/phrase.php';

class PhraseController {
    private $phraseModel;

    public function __construct($db) {
        $this->phraseModel = new Phrase($db);
    }

    public function index() {
        $phrases = $this->phraseModel->getAll();
        echo json_encode($phrases);
    }
}