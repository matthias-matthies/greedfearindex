<?php

require __DIR__ . '/vendor/autoload.php';

use CNTRX\Database;

$database = new Database();
echo json_encode($database->getCurrentGreedFearIndex());
