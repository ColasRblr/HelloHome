<?php

require_once 'models/Connection.php';

class Transaction extends Connection
{
    private $attribute;

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
}
