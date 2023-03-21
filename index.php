<?php
// include('./controllers/Routeur.php');
require './controllers/Routeur.php';
// require './views/ViewProperty.php';

$routeur = new Routeur();
$routeur->routerRequete();
