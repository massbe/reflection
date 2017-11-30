<?php


namespace Components;


class JsonableExperiment extends Jsonable
{
    public $id;
    public $name;
    public $fieldLOL;
    public $boolVar;
    private $privateField;

    public function __construct($id, $name, $fieldLOL, $boolVar)
    {
        $this->id = $id;
        $this->name = $name;
        $this->fieldLOL = $fieldLOL;
        $this->boolVar = $boolVar;
    }

    public function __toString()
    {
        return $this->arrayToJson;
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