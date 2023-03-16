<?php
require __DIR__ . '/../models/Property.php';
require __DIR__ . '/../views/View.php';

class PropertyController
{
    private $property;
    private $ctrlAccueil;

    public function __construct()
    {
        $this->property = new Property();
    }

    public function home()
    {
        $properties = $this->property->getAllProperty();
        $view = new View("Home");
        $view->generer(array('properties' => $properties));
    }

    public function getOneProperty()
    {
    }
}
