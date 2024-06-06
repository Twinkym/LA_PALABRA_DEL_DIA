<?php

require 'config/config.php';
require 'core/Database.php';
require 'controllers/PhraseController.php';

$config = require 'config/config.php';
$db = new Database($config['db']);
$controller = new PhraseController($db);

$controller->index();