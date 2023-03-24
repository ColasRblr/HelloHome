<?php

require_once 'models/Transaction.php';

class Rental extends Transaction
{
    public function addRental($id_transaction, $rent, $charges, $furnished)
    {
        try {
            $sql = "INSERT INTO rental (id_transaction, rent, charges, furnished) VALUES (?, ?, ?, ?);";
            $this->executerRequete($sql, array($id_transaction, $rent, $charges, $furnished));
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function getAllPropertyToRent($id)
    {
        $sql = "SELECT rental.id FROM rental INNER JOIN property on property.id = rental.id_transaction INNER JOIN transaction_type on transaction_type.id = rental.id WHERE id_user = ?;";
        $stmt = $this->executerRequete($sql, array($id));
        $properties = $stmt->fetchAll();
        return $properties;
    }
    public function getAllRentals()
    {
        $sql = "SELECT * FROM rental ";
        $results = $this->executerRequete($sql);
        $rentals = $results->fetchAll();
        return $rentals;
    }

    public function getOneRental($id_transaction)
    {
        $sql = "SELECT id_transaction, id FROM rental WHERE id_transaction = ?";
        $result = $this->executerRequete($sql, array($id_transaction));
        $rental = $result->fetch();
        return $rental;
    }
}
