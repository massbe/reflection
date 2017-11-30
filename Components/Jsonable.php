<?php


namespace Components;


abstract class Jsonable
{
    protected $arrayToJson;

    abstract public function __toString();

    public function toJson()
    {
        return json_encode($this->arrayToJson);
    }

    public function toArray($object)
    {
        $arrayToJson = [];
        $objectReflection = new \ReflectionClass($object);

        foreach ($objectReflection->getProperties(\ReflectionProperty::IS_PUBLIC) as $item){
            if(is_int($item->getValue($object)) || is_string($item->getValue($object)) || is_array($item->getValue($object))){
                $arrayToJson[$item->getName()] = $item->getValue($object);
            }
        }
        $this->arrayToJson = $arrayToJson;
    }
}