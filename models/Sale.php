<?php

require_once 'models/Connection.php';

class Sale extends Connection
{
    public function getAllSales()
    {
        $sql = "SELECT * FROM sale ";
        $results = $this->executerRequete($sql);
        $sales = $results->fetchAll();
        return $sales;
    }

    public function getOneSale($id_transaction)
    {
        $sql = "SELECT * FROM sale WHERE id_transaction = ? ";
        $result = $this->executerRequete($sql, array($id_transaction));
        $sale = $result->fetch();
        return $sale;
    }
}
