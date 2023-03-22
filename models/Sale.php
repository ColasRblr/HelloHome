<?php

require_once 'models/Transaction.php';

class Sale extends Transaction
{
    public function addSale($id_transaction, $selling_price)
    {
        $sql = "INSERT INTO sale (id_transaction, selling_price) VALUES (?, ?);";
        $this->executerRequete($sql, array($id_transaction, $selling_price));
    }
}
