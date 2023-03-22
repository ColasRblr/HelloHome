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

    // public function getFilterCityPropertyDashboard($id)
    // {
    //     $sql = "SELECT property_location FROM `property` WHERE property.id_user = ?;";
    //     $stmt = $this->executerRequete($sql, array($id));
    //     $properties = $stmt->fetchAll();

    //     return $properties;
    // }

}
