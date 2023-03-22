<?php

class House extends Property
{
    private $houseAttribute;
    private $property;

    // public function __construct($attribute, $houseAttribute)
    // {
    //     parent::__construct($attribute);
    //     $this->houseAttribute = $houseAttribute;
    // }
    public function __construct()
    {
        $this->property = new Property;
    }
   public function getAllHouses()
    {
        $sql = "SELECT * FROM house ";
        $results = $this->executerRequete($sql);
        $houses = $results->fetchAll();
        return $houses;
        }
    public function addHouse($id_property, $garden, $bonus)
    {
        $sql = "INSERT INTO house (id_property, garden, bonus) VALUES (?, ?, ?);";
        $this->executerRequete($sql, array($id_property, $garden, $bonus));
    }

    public function getAllHouses($id)
    {
        $sql = "SELECT house.id FROM house INNER JOIN property on property.id = house.id WHERE id_user = ?;";
        $stmt = $this->executerRequete($sql, array($id));
        $properties = $stmt->fetchAll();

        return $properties;
    }
}
