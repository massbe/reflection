<?php
include_once 'vendor/autoload.php';

use Components\Controller;
use Components\Jsonable;

$object = new Jsonable(23, 'Vika', 'KEK');
$object->setPrivateField('Приватное поле');
echo $object;

$objectReflection = new ReflectionClass($object);
$arrayToJson = [];

foreach ($objectReflection->getProperties(ReflectionProperty::IS_PUBLIC) as $item){
    if(is_int($item->getValue($object)) || is_string($item->getValue($object))){
        $arrayToJson[$item->getName()] = $item->getValue($object);
    }
    elseif (is_array($item->getValue($object))){
        echo json_decode($item->getValue($object));
    }
}

//var_dump(Controller::action($object));

var_dump(Controller::action($object));
//foreach ($objectReflection->getProperties() as $element){

//}





















































/*
$objectReflection = new ReflectionClass($object);
$a = $objectReflection->getProperties(ReflectionProperty::IS_PUBLIC);

foreach ($a as $item){
    $testWhatType = $item->getValue($object);
    if(is_string($testWhatType) || is_int($testWhatType)){
        return $testWhatType;
    }
    elseif (is_array($testWhatType)){
        return json_decode($testWhatType);
    }
    var_dump($testWhatType);
}*/