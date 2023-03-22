<?php
// require __DIR__ . '/../models/Property.php';
require_once './views/View.php';

require_once './models/Property.php';
require_once './models/Transaction.php';
require_once './models/Rental.php';
require_once './models/Sale.php';
require_once './models/House.php';
require_once './models/Apartment.php';
require_once './models/Picture.php';
require_once './controllers/TransactionController.php';

class PropertyController
{
    private $property;
    private $ctrlAccueil;
    private $transaction;
    private $rental;
    private $sale;
    private $house;
    private $apartment;
    private $transactionCtrl;
    private $picture;

    public function __construct()
    {
        $this->property = new Property();
        $this->house = new House();
        $this->apartment = new Apartment();
        $this->transaction = new Transaction();
        $this->rental = new Rental();
        $this->sale = new Sale();
        $this->transactionCtrl = new TransactionController();
        $this->picture = new Picture();
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
        // $idProperty = $_GET['id'];

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

    public function addProperty()
    {
        $properties = "hello";
        $view = new View("AddProperty");
        $view->generer(array('properties' => $properties));
    }

    public function validAddProperty()
    {
        $propertyInfo = [];
        if (isset($_POST['addTypeOfProperty']) && $_POST['addTypeOfProperty'] != "") {
            $typeOfProperty = $_POST['addTypeOfProperty'];
            $propertyInfo['typeOfProperty'] = $typeOfProperty;

            if ($typeOfProperty == "house") {
                if (isset($_POST['garden']) && $_POST['garden'] != "") {
                    $garden = 1;
                } else {
                    $garden = 0;
                }
                $propertyInfo['garden'] = $garden;

                if (isset($_POST['bonus']) && $_POST['bonus'] != "") {
                    $bonus = $_POST['bonus'];
                    $propertyInfo['bonus'] = $_POST['bonus'];
                }
            } else if ($typeOfProperty == "apartment") {
                if (isset($_POST['parking']) && $_POST['parking'] != "") {
                    $parking = 1;
                } else {
                    $parking = 0;
                }
                $propertyInfo['parking'] = $parking;

                if (isset($_POST['floor']) && $_POST['floor'] != "") {
                    $floor = 1;
                } else {
                    $floor = 0;
                }
                $propertyInfo['floor'] = $floor;

                if (isset($_POST['caretaking']) && $_POST['caretaking'] != "") {
                    $caretaking = 1;
                } else {
                    $caretaking = 0;
                }
                $propertyInfo['caretaking'] = $caretaking;

                if (isset($_POST['elevator']) && $_POST['elevator'] != "") {
                    $elevator = 1;
                } else {
                    $elevator = 0;
                }
                $propertyInfo['elevator'] = $elevator;

                if (isset($_POST['balcony']) && $_POST['balcony'] != "") {
                    $balcony = 1;
                } else {
                    $balcony = 0;
                }
                $propertyInfo['balcony'] = $balcony;
            }
        }
        if (isset($_POST['addStatutProperty']) && $_POST['addStatutProperty'] != "") {
            $statutProperty = $_POST['addStatutProperty'];
            $propertyInfo['statutProperty'] = $_POST['addStatutProperty'];

            if ($statutProperty == "sale") {
                if (isset($_POST['salePrice']) && $_POST['salePrice'] != "") {
                    $selling_price = $_POST['salePrice'];
                    $propertyInfo['salePrice'] = $selling_price;
                }
            } else if ($statutProperty == "rent") {
                if (isset($_POST['rent']) && $_POST['rent'] != "") {
                    $rent = $_POST['rent'];
                    $propertyInfo['rent'] = $rent;
                }
                if (isset($_POST['chargesForRent']) && $_POST['chargesForRent'] != "") {
                    $charges = $_POST['chargesForRent'];
                    $propertyInfo['charges'] = $charges;
                }
                if (isset($_POST['furnishedProperty']) && $_POST['furnishedProperty'] != "") {
                    $furnished = 1;
                } else {
                    $furnished = 0;
                }
                $propertyInfo['furnished'] = $furnished;
            }
        }
        if (isset($_POST['locationOfProperty']) && $_POST['locationOfProperty'] != "") {
            $property_location = $_POST['locationOfProperty'];
            $propertyInfo['property_location'] = $_POST['locationOfProperty'];
        }
        if (isset($_POST['area']) && $_POST['area'] != "") {
            $property_area = $_POST['area'];
            $propertyInfo['property_area'] = $property_area;
        }
        if (isset($_POST['numberOfPieces']) && $_POST['numberOfPieces'] != "") {
            $property_numberOfPieces = $_POST['numberOfPieces'];
            $propertyInfo['property_numberOfPieces'] = $property_numberOfPieces;
        }
        if (isset($_POST['distanceFromTheSea']) && $_POST['distanceFromTheSea'] != "") {
            $property_distanceFromSea = $_POST['distanceFromTheSea'];
            $propertyInfo['property_distanceFromSea'] = $property_distanceFromSea;
        }
        if (isset($_POST['swimmingpool']) && $_POST['swimmingpool'] != "") {
            $property_swimmingpool = true;
        } else {
            $property_swimmingpool = false;
        }
        $propertyInfo['property_swimmingpool'] = $property_swimmingpool;

        if (isset($_POST['seaView']) && $_POST['seaView'] != "") {
            $property_seaView = true;
        } else {
            $property_seaView = 0;
        }
        $propertyInfo['property_seaView'] = $property_seaView;

        if (isset($_POST['nameProperty']) && $_POST['nameProperty'] != "") {
            $property_name = $_POST['nameProperty'];
            $propertyInfo['property_name'] = $property_name;
        }
        if (isset($_POST['descriptionProperty']) && $_POST['descriptionProperty'] != "") {
            $property_description = $_POST['descriptionProperty'];
            $propertyInfo['property_description'] = $_POST['descriptionProperty'];
        }
        if (isset($_FILES['picture']) && $_FILES['picture'] != "") {
            $picture_name = $_FILES['picture']['name'];
            $picture_tmp = $_FILES['picture']['tmp_name'];

            $destination_folder = './asset/img/';

            try {
                move_uploaded_file($picture_tmp, $destination_folder . $picture_name);
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        }
        // var_dump($propertyInfo);
        // foreach ($propertyInfo as $key => $value) {
        //     echo $key . " : " . $value . "<br/>";
        // }
        session_start();
        $id_property = $this->property->addProperty($property_name, $property_description, $property_location, $property_area, $property_numberOfPieces, $property_distanceFromSea, $property_swimmingpool, $property_seaView, $_SESSION['user_id']);
        $this->picture->addPicture($id_property, $property_name, $picture_name);
        $id_transaction = $this->transactionCtrl->addTransaction($id_property, $statutProperty);
        if ($typeOfProperty == "house") {
            $this->house->addHouse($id_property, $garden, $bonus);
        } else if ($typeOfProperty == "apartment") {
            $this->apartment->addApartment($id_property, $parking, $floor, $elevator, $caretaking, $balcony);
        }
        if ($statutProperty == "sale") {
            $this->transactionCtrl->addSale($id_transaction, $selling_price);
        } else if ($statutProperty == "rent") {
            $this->transactionCtrl->addRental($id_transaction, $rent, $charges, $furnished);
        }

        $adminInfo = $this->property->getAllPropertyOfOneAdmin($_SESSION['user_id']);
        $view = new View("Dashboard");
        $view->generer(array('properties' => $adminInfo));
    }

}
