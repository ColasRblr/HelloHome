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

    // public function getOneProperty()
    // {
    // }
}
