<?php

require_once 'models/Connection.php';

class House extends Connection
{
    public function getAllHouses()
    {
        $sql = "SELECT * FROM house ";
        $results = $this->executerRequete($sql);
        $houses = $results->fetchAll();
        return $houses;
    }
}
