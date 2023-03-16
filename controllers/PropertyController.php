<?php
// require __DIR__ . '/../models/Property.php';
require './views/View.php';

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
        echo "je suis dans le property controller";
        // $properties = $this->property->getAllProperty();
        $properties = "hello";
        $view = new View("Home");
        $view->generer(array('properties' => $properties));
    }

    // public function getOneProperty()
    // {
    // }
}
