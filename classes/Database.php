<?php

namespace CNTRX;

use Kreait\Firebase\Factory;
use CNTRX\GreedFearIndex;

class Database 
{
    private $database;

    public function __construct() {
        $factory = (new Factory)
            ->withServiceAccount(__DIR__.'/../config/greedfearwidget-firebase-adminsdk.json')
            ->withDatabaseUri('https://greedfearwidget-default-rtdb.europe-west1.firebasedatabase.app/');

        $this->database = $factory->createDatabase();
    }

    public function getCurrentGreedFearIndex() {
        $reference = $this->database->getReference('currentGreedFearIndex');
        $snapshot = $reference->getSnapshot();
        return $snapshot->getValue();
    }

    public function setCurrentGreedFearIndex() {
        $reference = $this->database->getReference('currentGreedFearIndex')->set(GreedFearIndex::scrapeCurrentGreadFearIndex());
    }
}