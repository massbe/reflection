<?php


namespace Components;


class Jsonable
{
    public $id;
    public $name;
    public $fieldLOL;
    public $boolVar;
    private $privateField;
    private $allObject;

    public function __construct($id, $name, $fieldLOL, $boolVar)
    {
        $this->id = $id;
        $this->name = $name;
        $this->fieldLOL = $fieldLOL;
        $this->boolVar = $boolVar;
    }

    public function __toString()
    {
        return $this->allObject;
    }

    public function setAllObject($value){
        $this->allObject = $value;
    }

    public function getPrivateField()
    {
        return $this->privateField;
    }

    public function setPrivateField($privateField)
    {
        $this->privateField = $privateField;
    }
}