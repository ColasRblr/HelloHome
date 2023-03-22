<?php

require_once 'models/Connection.php';

require_once 'models/Sale.php';
require_once 'models/Rental.php';

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
    private $sale;
    private $rental;

    public function __construct()
    {
        $this->sale = new Sale();
        $this->rental = new Rental();
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
        // echo "coucou";
        // echo ($id_property);
        // echo "coucou";
        // die;
        $sql = "SELECT * FROM transaction_type WHERE id_property=? ";
        $result = $this->executerRequete($sql, array($id_property));
        $transaction = $result->fetch();
        if ($this->sale->getOneSale($transaction['id'])) {
            $saleResult = [$transaction, $this->sale->getOneSale($transaction['id'])];
            return $saleResult;
        } elseif ($this->rental->getOneRental($transaction['id'])) {
            $rentalResult = [$transaction, $this->rental->getOneRental($transaction['id'])];
            return $rentalResult;
        }

   
}
