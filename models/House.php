<?php

require_once 'models/Property.php';

class House extends Property
{
    private $houseAttribute;

    public function __construct($attribute, $houseAttribute)
    {
        parent::__construct($attribute);
        $this->houseAttribute = $houseAttribute;
    }

    public function addHouse()
    {
    }
}
