<?php


namespace Components;


class Jsonable
{
    public $id;
    public $name;
    public $fieldLOL;
    private $privateField;

    public function __construct($id, $name, $fieldLOL)
    {
        $this->id = $id;
        $this->name = $name;
        $this->fieldLOL = $fieldLOL;
    }

    public function __toString()
    {
        return $this->id;
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