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
        $typeOfProperty = $_POST['addTypeOfProperty'];
        $statutProperty = $_POST['addStatutProperty'];
        $locationOfProperty = $_POST['locationOfProperty'];
        $addPriceHouse = $_POST['addPriceHouse'];
        $addPriceApartment = $_POST['addPriceApartment'];
        $area = $_POST['area'];
        $numberOfPieces = $_POST['numberOfPieces'];
        $distanceFromTheSea = $_POST['distanceFromTheSea'];
        $chargesForRent = $_POST['chargesForRent'];
        $furnishedProperty = $_POST['furnishedProperty'];
        $bonus = $_POST['bonus'];
        $descriptionProperty = $_POST['descriptionProperty'];
        $picture = $_POST['picture'];

        $attributes = [
            $typeOfProperty,
            $statutProperty,
            $locationOfProperty,
            $addPriceHouse,
            $addPriceApartment,
            $area,
            $numberOfPieces,
            $distanceFromTheSea,
            $chargesForRent,
            $furnishedProperty,
            $bonus,
            $descriptionProperty,
            $picture
        ];
        // for ($i = 0; $i < count($attributes); $i++) {
        //     echo $attributes[$i] . "<br/>";
        // }
        $properties = "hello";
        $view = new View("AddProperty");
        $view->generer(array('properties' => $properties));
    }
}
