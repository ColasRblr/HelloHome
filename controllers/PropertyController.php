<?php
// require __DIR__ . '/../models/Property.php';
require_once './views/View.php';

class PropertyController
{
    private $property;
    private $ctrlAccueil;

    // public function __construct()
    // {
    //     $this->property = new Property();
    // }

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
            $propertyInfo['typeOfProperty'] = $_POST['addTypeOfProperty'];

            if ($typeOfProperty == "house") {
                if (isset($_POST['addPriceHouse']) && $_POST['addPriceHouse'] != "") {
                    $addPriceHouse = $_POST['addPriceHouse'];
                    $propertyInfo['statutProperty'] = $_POST['addStatutProperty'];
                }
            } else if ($typeOfProperty == "apartment") {
                if (isset($_POST['addPriceApartment']) && $_POST['addPriceApartment'] != "") {
                    $addPriceApartment = $_POST['addPriceApartment'];
                }
            }
        }
        if (isset($_POST['addStatutProperty']) && $_POST['addStatutProperty'] != "") {
            $statutProperty = $_POST['addStatutProperty'];
            $propertyInfo['statutProperty'] = $_POST['addStatutProperty'];

            if ($statutProperty == "sale") {
            } else if ($statutProperty == "rent") {
                if (isset($_POST['chargesForRent']) && $_POST['chargesForRent'] != "") {
                    $chargesForRent = $_POST['chargesForRent'];
                }
                if (isset($_POST['furnishedProperty']) && $_POST['furnishedProperty'] != "") {
                    $furnishedProperty = $_POST['furnishedProperty'];
                }
            }
        }
        if (isset($_POST['locationOfProperty']) && $_POST['locationOfProperty'] != "") {
            $locationOfProperty = $_POST['locationOfProperty'];
            $propertyInfo['property_location'] = $_POST['locationOfProperty'];
        }

        if (isset($_POST['area']) && $_POST['area'] != "") {
            $area = $_POST['area'];
            $propertyInfo['property_area'] = $_POST['area'];
        }
        if (isset($_POST['numberOfPieces']) && $_POST['numberOfPieces'] != "") {
            $numberOfPieces = $_POST['numberOfPieces'];
            $propertyInfo['property_numberOfPieces'] = $_POST['numberOfPieces'];
        }
        if (isset($_POST['distanceFromTheSea']) && $_POST['distanceFromTheSea'] != "") {
            $distanceFromTheSea = $_POST['distanceFromTheSea'];
            $propertyInfo['property_distanceFromSea'] = $_POST['distanceFromTheSea'];
        }

        if (isset($_POST['swimmingpool']) && $_POST['swimmingpool'] != "") {
            $bonus = $_POST['swimmingpool'];
            $propertyInfo['property_swimmingpool'] = $_POST['swimmingpool'];
        }
        if (isset($_POST['seaView']) && $_POST['seaView'] != "") {
            $bonus = $_POST['seaView'];
            $propertyInfo['property_seaView'] = $_POST['seaView'];
        }
        if (isset($_POST['nameProperty']) && $_POST['nameProperty'] != "") {
            $descriptionProperty = $_POST['nameProperty'];
            $propertyInfo['property_name'] = $_POST['nameProperty'];
        }
        if (isset($_POST['descriptionProperty']) && $_POST['descriptionProperty'] != "") {
            $descriptionProperty = $_POST['descriptionProperty'];
            $propertyInfo['property_description'] = $_POST['descriptionProperty'];
        }
        if (isset($_POST['picture']) && $_POST['picture'] != "") {
            $picture = $_POST['picture'];
        }

        var_dump($propertyInfo);
        foreach ($propertyInfo as $key => $value) {
            echo $key . " : " . $value . "<br/>";
        }

        $properties = "hello";
        $view = new View("AddProperty");
        $view->generer(array('properties' => $properties));
    }
}
