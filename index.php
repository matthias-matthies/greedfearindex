<?php

require __DIR__ . '/vendor/autoload.php';

use CNTRX\Database;

$database = new Database();
$database->setCurrentGreedFearIndex();
echo $database->getCurrentGreedFearIndex();
