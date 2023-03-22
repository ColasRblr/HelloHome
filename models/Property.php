<?php

require_once 'models/Connection.php';


class Property extends Connection
{
    public function __construct()
    {
    }
    public function getAllProperty()
    {
        $sql = "SELECT * FROM property;";
        $this->executerRequete($sql);
    }

    public function getLastProperties()
    {
        $sql = "SELECT id FROM property ORDER BY property.id DESC LIMIT 3";
        $results = $this->executerRequete($sql);
        $lastProperties = $results->fetchAll();
        return $lastProperties;
    }

    public function getDetailsLastProperties($property_type, $property_transaction)
    {
        $sql = "SELECT * FROM property JOIN $property_type ON property.id = $property_type.id_property JOIN transaction_type ON property.id = transaction_type.id_property JOIN $property_transaction ON transaction_type.id = $property_transaction.id_transaction";
        $results = $this->executerRequete($sql);
        $lastDetailsProperties = $results->fetchAll();
        return $lastDetailsProperties;
    }
}
