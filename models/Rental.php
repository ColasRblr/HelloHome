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
}
