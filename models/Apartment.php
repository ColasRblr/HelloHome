<?php

require_once 'models/Property.php';

class Apartment extends Property
{
    private $apartmentAttribute;

    public function __construct($attribute, $apartmentAttribute)
    {
        parent::__construct($attribute);
        $this->apartmentAttribute = $apartmentAttribute;
    }

    public function addApartment()
    {
    }
}
