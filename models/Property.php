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


    public function getAllInformationsOfProperty($id)
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

    public function getLastProperties()
    {
        $sql = "SELECT id FROM property ORDER BY id DESC LIMIT 3";
        $results = $this->executerRequete($sql);
        $lastProperties = $results->fetchAll();

        return $lastProperties;
    }

    public function getDetailsLastProperties($id_property, $property_type, $property_transaction)
    {
        $sql = "SELECT * FROM property JOIN $property_type ON property.id = $property_type.id_property JOIN transaction_type ON property.id = transaction_type.id_property JOIN $property_transaction ON transaction_type.id = $property_transaction.id_transaction JOIN picture ON property.id=picture.id_property WHERE property.id = $id_property";
        $results = $this->executerRequete($sql, array($property_type, $property_transaction, $id_property));
        $lastDetailsProperties = $results->fetchAll();

        return $lastDetailsProperties;
    }
}
