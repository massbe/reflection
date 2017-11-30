<?php


namespace Components;


abstract class Jsonable
{
    protected $arrayToJson;

    public function __toString()
    {
        return $this->arrayToJson;
    }

    public function toJson()
    {
        return json_encode($this->arrayToJson);
    }

    public function toArray($object)
    {
        $objectReflection = new \ReflectionClass($object);

        foreach ($objectReflection->getProperties(\ReflectionProperty::IS_PUBLIC) as $item){
            if(is_int($item->getValue($object)) || is_string($item->getValue($object)) || is_array($item->getValue($object))){
                $this->arrayToJson[$item->getName()] = $item->getValue($object);
            }
        }
    }
}