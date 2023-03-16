<?php
// include('./controllers/Routeur.php');
require './controllers/Routeur.php';

$routeur = new Routeur();
$routeur->routerRequete();
