<?php

require_once 'models/Transaction.php';

class Sale extends Transaction
{
    public function addSale($id_transaction, $selling_price)
    {
        $sql = "INSERT INTO sale (id_transaction, selling_price) VALUES (?, ?);";
        $this->executerRequete($sql, array($id_transaction, $selling_price));
    }

    public function getAllSales()
    {
        $sql = "SELECT * FROM sale ";
        $results = $this->executerRequete($sql);
        $sales = $results->fetchAll();
        return $sales;
    }

    public function getOneSale($id_transaction)
    {
        $sql = "SELECT id_transaction, id FROM sale WHERE id_transaction = ? ";
        $result = $this->executerRequete($sql, array($id_transaction));
        $sale = $result->fetch();
        return $sale;
    }

    public function getAllPropertyToSale($id_property)
    {
        $sql = "SELECT * FROM sale 
        INNER JOIN transaction_type on transaction_type.id = sale.id_transaction
        WHERE transaction_type.id_property = ?;";
        $stmt = $this->executerRequete($sql, array($id_property));
        $properties = $stmt->fetchAll();
        var_dump($properties);
        return $properties;
    }
}
