<?php

require_once 'models/Property.php';

class Apartment extends Property
{
    private $apartmentAttribute;

    // public function __construct($attribute, $apartmentAttribute)
    // {
    //     parent::__construct($attribute);
    //     $this->apartmentAttribute = $apartmentAttribute;
    // }

    public function addApartment($id_property, $parking, $floor, $elevator, $caretaking, $balcony)
    {
        try{
            $sql = "INSERT INTO apartment (id_property, parking, floor, elevator, caretaking, balcony) VALUES (?, ?, ?, ?, ?, ?);";
            $this->executerRequete($sql, array($id_property, $parking, $floor, $elevator, $caretaking, $balcony));
        }catch(Exception $e){
            echo $e->getMessage();
        }
    }
}
