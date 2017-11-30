<?php
include_once 'vendor/autoload.php';

use Components\Controller;
use Components\JsonableExperiment;

$arrayToJson = [];

$object = new JsonableExperiment(23, 'Vikaaaa', array(1 => 10, 2 => 30, 'dssdfsd' => 23423), true);
$object->setPrivateField('Приватное поле');
$object->toArray($object);


//var_dump($object->toJson());



//$object->setAllObject(json_encode($arrayToJson));

echo Controller::action($object);