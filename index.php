<?php
include_once 'vendor/autoload.php';

use Components\Controller;
use Components\Jsonable;

//Переменная, в которую я записываю значения объекта Jsonable после сверки их типов
$arrayToJson = [];

/*
Здесь я задаю значения объекту Jsonable. Я создал для него специальный конструктор, который записывает
данные в разные поля объекта (public, private, protected). Чтобы проверить работоспособность кода
*/

$object = new Jsonable(23, 'Vikaaaa', array(1 => 10, 2 => 30, 'dssdfsd' => 23423), true);
$object->setPrivateField('Приватное поле');

//Вызываю класс Рефлексии, чтобы получить данные из созданного объекта типа Jsonable
$objectReflection = new ReflectionClass($object);

//Здесь я с помощью рефлексии перебираю каждый элемент свойства объекта и сверяю их типы. Нам надо: int, string и array
foreach ($objectReflection->getProperties(ReflectionProperty::IS_PUBLIC) as $item){
    if(is_int($item->getValue($object)) || is_string($item->getValue($object)) || is_array($item->getValue($object))){
        $arrayToJson[$item->getName()] = $item->getValue($object);
    }
}

//Добавляю в класс значение
$object->setAllObject(json_encode($arrayToJson));


//Что нужно было вызвать. Как выдно, нет типов, который не подходят условиям (пустых, float)
echo Controller::action($object);

//$methodReflection = new ReflectionMethod('Jsonable', 'setAllObject');
//$methodReflection->invoke(null, json_encode($arrayToJson));