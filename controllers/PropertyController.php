<?php
// require __DIR__ . '/../models/Property.php';
require_once './views/View.php';
require_once './models/Property.php';
require_once './models/Apartment.php';
require_once './models/House.php';
require_once './models/Transaction.php';
require_once './models/Rental.php';
require_once './models/Sale.php';

class PropertyController
{
    private $property;
    private $ctrlAccueil;
    private $house;
    private $apartment;
    private $transaction;
    private $rental;
    private $sale;

    public function __construct()
    {
        $this->property = new Property();
        $this->house = new House();
        $this->apartment = new Apartment();
        $this->transaction = new Transaction();
        $this->rental = new Rental();
        $this->sale = new Sale();
    }

    public function home()
    {

        // $type = $this->property->propertyType();
        // $test = implode($type);
        $transaction = $this->propertyTransaction();
        // $test2 = implode($transaction);
        // $lastProperties = $this->property->getlastProperties();
        // $lastDetailsProperties = $this->property->getDetailsLastProperties($type, "rental");
        $view = new View("Home");
        $view->generer(array('transaction' => $transaction));
    }

    public function getOneProperty()
    {
        $idProperty = $_GET['id'];

        $properties = "hello";
        $view = new View("Property");
        $view->generer(array('properties' => $properties));
    }

    public function propertyTransaction()
    {
        //Get in variables the functions we need to get properties, apts and houses datas from db
        $lastProperties = $this->property->getLastProperties();
        for ($i = 0; $i < count($lastProperties); $i++) {
            $transactions[$i] = $this->transaction->getOneTransaction($lastProperties[$i]);
            var_dump($transactions);
            die;
        }

        $transactions = $this->transaction->getAllTransactions();
        $rentals = $this->rental->getAllRentals();
        $sales = $this->sale->getAllSales();

        $sales_id = [];
        $rentals_id = [];
        $lastTransactions_id = [];
        $lastProperties_id = [];
        $transactions_id = [];


        //Put id of the 3 last properties in an array
        foreach ($lastProperties as $key => $lastProperty) {
            $lastProperties_id[$key] = $lastProperty['id'];
        }

        //Put id and id_property of all the transactions in an array
        foreach ($transactions as $key => $transaction) {
            $transactions_id[$transaction["id"]] = $transaction['id_property'];
        }

        //Put id of all the rentals in an array
        foreach ($rentals as $key => $rental) {
            $rentals_id[] = $rental['id_transaction'];
        }

        //Put id of all the sales in an array
        foreach ($sales as $key => $sale) {
            $sales_id[] = $sale['id_transaction'];
        }

        $property_transaction = [];


        // Comparing last 3 properties id with all the transactions_id  : if it matches, we add  values in a new array
        foreach ($transactions_id as $key => $value) {
            if ($value == $lastProperties_id[0]) {
                $lastTransactions_id[] = $key;
            } elseif ($value == $lastProperties_id[1]) {
                $lastTransactions_id[] = $key;
            } elseif ($value == $lastProperties_id[2]) {
                $lastTransactions_id[] = $key;
            }
        }


        // Comparing last 3 transactions id with all the rentals_id  : if it matches, we put "rental" (db table name) in the $property_transaction variable
        foreach ($rentals_id as $key => $value) {
            if ($value == $lastTransactions_id[$key]) {
                $property_transaction = "rental";
            }
        }

        // Comparing last 3 transactions id with all the sales_id  : if it matches, we put "sale" (db table name) in the $property_transaction variable
        foreach ($sales_id as $key => $value) {
            if ($value == $lastTransactions_id[$key]) {
                $property_transaction = "sale";
            }
        }

        return $property_transaction;
    }

    // public function propertyType()
    // {
    //     //Get in variables the functions we need to get properties, apts and houses datas from db
    //     $lastProperties = $this->property->getLastProperties();
    //     $apartments = $this->apartment->getAllApartments();
    //     $houses = $this->house->getAllHouses();

    //     $houses_id = [];
    //     $apartments_id = [];
    //     $lastProperties_id = [];

    //     //Put id of the 3 last properties in an array
    //     foreach ($lastProperties as $key => $lastProperty) {
    //         $lastProperties_id[$key] = $lastProperty['id'];
    //     }

    //     //Put id of all the apartments in an array
    //     foreach ($apartments as $key => $apartment) {
    //         $apartments_id[] = $apartment['id_property'];
    //     }

    //     //Put id of all the houses in an array
    //     foreach ($houses as $key => $house) {
    //         $houes_id[] = $house['id_property'];
    //     }

    //     $property_type = "";


    //     // Comparing last 3 properties id with all the transactions_id  : if it matches, we add  values in a new array
    //     foreach ($apartments_id as $key => $value) {
    //         if ($value == $lastProperties_id[0]) {
    //             $lastTransactions_id[] = $key;
    //         } elseif ($value == $lastProperties_id[1]) {
    //             $lastTransactions_id[] = $key;
    //         } elseif ($value == $lastProperties_id[2]) {
    //             $lastTransactions_id[] = $key;
    //         }
    //     }

    //     // Comparing last 3 transactions id with all the rentals_id  : if it matches, we put "rental" (db table name) in the $property_transaction variable
    //     foreach ($apartments_id as $key => $value) {
    //         if ($value == $lastTransactions_id[$key]) {
    //             $property_transaction = "rental";
    //         }
    //     }

    //     // Comparing last 3 transactions id with all the sales_id  : if it matches, we put "sale" (db table name) in the $property_transaction variable
    //     foreach ($sales_id as $key => $value) {
    //         if ($value == $lastTransactions_id[$key]) {
    //             $property_transaction = "sale";
    //         }
    //     }

    //     return $property_transaction;
    // }
}
