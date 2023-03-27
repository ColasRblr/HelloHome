<?php

require_once './controllers/PropertyController.php';
require_once './controllers/UserController.php';
require_once './controllers/TransactionController.php';
// require_once '././views/View.php';

class Routeur
{
    private $propertyCtrl;
    private $userCtrl;
    private $transactionCtrl;

    public function __construct()
    {
        $this->propertyCtrl = new PropertyController();
        $this->userCtrl = new UserController();
        $this->transactionCtrl = new TransactionController();
    }

    public function routerRequete()
    {
        try {
            if (isset($_GET['action'])) {
                if ($_GET['action'] == 'getOneProperty') {
                    $this->propertyCtrl->getOneProperty();
                } else if ($_GET['action'] == 'dashboardConnection') {
                    $this->userCtrl->connection();
                } else if ($_GET['action'] == 'validConnection') {
                    $this->userCtrl->validConnection();
                } else if ($_GET['action'] == 'addProperty') {
                    $this->propertyCtrl->addProperty();
                } else if ($_GET['action'] == 'validAddProperty') {
                    $this->propertyCtrl->validAddProperty();
                } else if ($_GET['action'] == 'deconnection') {
                    $this->userCtrl->deconnection();
                } else if ($_GET['action'] == 'profil') {
                    $this->userCtrl->getProfilAdmin();
                } else if ($_GET['action'] == 'displayDashboard') {
                    $this->userCtrl->displayDashboard();
                } else if ($_GET['action'] == 'visitProperty') {
                    $this->propertyCtrl->visitProperty();
                } else if ($_GET['action'] == 'updateProperty') {
                    $this->propertyCtrl->validUpdateProperty();
                } else if ($_GET['action'] == 'removeProperty') {
                    $this->propertyCtrl->validDeleteProperty($_GET['propertyId']);
                }
            } else {
                $this->propertyCtrl->home();  // action par défaut
            }
        } catch (Exception $e) {
            // $this->erreur($e->getMessage());
        }
    }

    // Affiche une erreur
    // private function erreur($msgErreur)
    // {
    //     $view = new View("Erreur");
    //     $view->generer(array('msgErreur' => $msgErreur));
    // }
}
