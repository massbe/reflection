<?php

namespace Components;

abstract class Jsonable
{
    public function __toString()
    {
        return json_encode($this->toArray());
    }

    public function toArray()
    {
        $arrayToJson = [];

        $objectReflection = new \ReflectionClass($this);

        foreach ($objectReflection->getProperties(\ReflectionProperty::IS_PUBLIC) as $item){
            if(is_int($item->getValue($this)) || is_string($item->getValue($this)) || is_array($item->getValue($this))){
                $arrayToJson[$item->getName()] = $item->getValue($this);
            }
        }
        return $arrayToJson;
    }
}