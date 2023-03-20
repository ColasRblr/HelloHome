<?php
// require __DIR__ . '/../models/User.php';
require_once './views/View.php';

class UserController
{
    private $property;
    private $ctrlAccueil;

    // public function __construct()
    // {
    //     $this->property = new Property();
    // }

    public function connection()
    {
        $properties = "hello";
        $view = new View("Connection");
        $view->generer(array('properties' => $properties));
    }

    public function getDashboard()
    {
        $properties = "hello";
        $view = new View("Dashboard");
        $view->generer(array('properties' => $properties));
    }
}
