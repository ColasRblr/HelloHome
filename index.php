<?php
ini_set('display_errors', 1);

require './controllers/Routeur.php';

$routeur = new Routeur();
$routeur->routerRequete();

// $controller = new PropertyController();
// $controller->displayProperty();
