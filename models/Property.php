<?php

require_once 'models/Connection.php';

class Property extends Connection
{
    private $attribute;

    public function __construct()
    {
        // $this->attribute = $attribute;
    }

    public function getAllPropertyOfOneAdmin($id)
    {
        $sql = "SELECT * FROM property WHERE id_user = ?;";
        $stmt = $this->executerRequete($sql, array($id));
        $properties = $stmt->fetchAll();

        return $properties;
    }
    public function addProperty($property_name, $property_description, $property_location, $property_area, $property_numberOfPieces, $property_distanceFromSea, $property_swimmingpool, $property_seaView, $id_user)
    {
        $sql = "INSERT INTO property (property_name, property_description, property_location, property_area, property_numberOfPieces, property_distanceFromSea, property_swimmingpool, property_seaView, id_user) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?);";
        $this->executerRequete($sql, array($property_name, $property_description, $property_location, $property_area, $property_numberOfPieces, $property_distanceFromSea, $property_swimmingpool, $property_seaView, $id_user));

        return $this->getBdd()->lastInsertId();
    }
}
