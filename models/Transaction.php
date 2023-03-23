<?php

require_once 'models/Property.php';

class Transaction extends Property
{
    // private $attribute;

    // public function __construct($attribute)
    // {
    //     $this->attribute = $attribute;
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
        $sql = "SELECT id, id_property FROM transaction_type WHERE id_property=? ";
        $result = $this->executerRequete($sql, $id_property);
        $transaction = $result->fetch();
        return $transaction;
    }
}
