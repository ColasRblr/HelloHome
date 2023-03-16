<?php

require_once 'controller.php';

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
                }
            } else {
                $this->propertyCtrl->home();  // action par défaut
            }
        } catch (Exception $e) {
            $this->erreur($e->getMessage());
        }
    }

    // Affiche une erreur
    private function erreur($msgErreur)
    {
        $view = new View("Erreur");
        $view->generer(array('msgErreur' => $msgErreur));
    }
}
