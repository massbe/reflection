<?php
include_once 'vendor/autoload.php';

use Components\Controller;
use Components\JsonableExperiment;

$object = new JsonableExperiment(23, 'Vikaaaa', array(1 => 10, 2 => 30, 'dssdfsd' => 23423), true);
$object->setPrivateField('Приватное поле');

echo Controller::action($object);