<?php

require_once 'models/Connection.php';

class Rental extends Connection
{

    public function getAllRentals()
    {
        $sql = "SELECT * FROM rental ";
        $results = $this->executerRequete($sql);
        $rentals = $results->fetchAll();
        return $rentals;
    }

    public function getOneRental($id_transaction)
    {
        $sql = "SELECT * FROM rental WHERE id_transaction = ?";
        $result = $this->executerRequete($sql, array($id_transaction));
        $rental = $result->fetch();
        return $rental;
    }
}
