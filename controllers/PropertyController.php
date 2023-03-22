<?php
// require __DIR__ . '/../models/Property.php';
require_once './views/View.php';
require_once './models/House.php';
require_once './models/Apartment.php';
require_once './controllers/TransactionController.php';

class PropertyController
{
    private $property;
    private $house;
    private $apartment;
    private $transactionCtrl;

    public function __construct()
    {
        $this->property = new Property();
        $this->house = new House();
        $this->apartment = new Apartment();
        $this->transactionCtrl = new TransactionController();
    }

    public function home()
    {
        // $properties = $this->property->getAllProperty();
        $properties = "hello";
        $view = new View("Home");
        $view->generer(array('properties' => $properties));
    }

    public function getOneProperty()
    {
        // $idProperty = $_GET['id'];

        $properties = "hello";
        $view = new View("Property");
        $view->generer(array('properties' => $properties));
    }

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
            $propertyInfo['property_name'] = $_POST['nameProperty'];
        }
        if (isset($_POST['descriptionProperty']) && $_POST['descriptionProperty'] != "") {
            $property_description = $_POST['descriptionProperty'];
            $propertyInfo['property_description'] = $_POST['descriptionProperty'];
        }
        if (isset($_POST['picture']) && $_POST['picture'] != "") {
            $picture = $_POST['picture'];
            $propertyInfo['picture'] = $_POST['picture'];
        }

        // var_dump($propertyInfo);
        // foreach ($propertyInfo as $key => $value) {
        //     echo $key . " : " . $value . "<br/>";
        // }
        session_start();
        $id_property = $this->property->addProperty($property_name, $property_description, $property_location, $property_area, $property_numberOfPieces, $property_distanceFromSea, $property_swimmingpool, $property_seaView, $_SESSION['user_id']);
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

        $properties = "hello";
        $view = new View("AddProperty");
        $view->generer(array('properties' => $properties));
    }
}
