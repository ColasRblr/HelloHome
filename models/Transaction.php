<?php

require_once 'models/Property.php';

class Transaction extends Connection
{
    // private $attribute;


    // public function __construct()
    // {
    //     // $this->attribute = $attribute;
    //    
    // }

    public function addNewTransaction($transaction_onlineDate, $transaction_status, $id_property)
    {
        $sql = "INSERT INTO transaction_type (transaction_onlineDate, transaction_status, id_property) VALUES (?, ?, ?);";
        $this->executerRequete($sql, array($transaction_onlineDate, $transaction_status, $id_property));

        return $this->getBdd()->lastInsertId();
    }

    public function getAllTransactions()
    {
        $sql = "SELECT * FROM transaction_type ";
        $results = $this->executerRequete($sql);
        $transactions = $results->fetchAll();
        return $transactions;
    }

    public function getOneTransaction($id_property)
    {
        $sql = "SELECT id FROM transaction_type WHERE id_property=? ";
        $result = $this->executerRequete($sql, array($id_property));
        $transaction = $result->fetch();
        return $transaction;
    }

    public function deleteOneTransaction($id_property)
    {
        $sql = "DELETE FROM transaction_type WHERE id_property = ?;";
        $this->executerRequete($sql, array($id_property));
    }
}
