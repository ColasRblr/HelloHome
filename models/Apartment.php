<?php

require_once 'models/Connection.php';

class Apartment extends Connection
{
    public function getAllApartments()
    {
        $sql = "SELECT * FROM apartment";
        $results = $this->executerRequete($sql);
        $apartments = $results->fetchAll();
        return $apartments;
    }
}
