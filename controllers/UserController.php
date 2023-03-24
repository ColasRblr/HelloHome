<?php
// require __DIR__ . '/../models/User.php';
require_once './views/View.php';
require_once './models/User.php';
require_once './models/Property.php';

class UserController
{
    private $property;
    private $user;
    private $ctrlAccueil;
    private $house;
    private $rental;
    private $transaction;
    private $propertyCtrl;

    public function __construct()
    {
        // $this->property = new Property();
        $this->user = new User();
        $this->property = new Property();
        $this->house = new House();
        $this->rental = new Rental();
        $this->transaction = new Transaction();
        $this->propertyCtrl = new PropertyController();
    }

    public function connection()
    {
        $properties = "hello";
        $view = new View("Connection");
        $view->generer(array('properties' => $properties));
    }

    public function validConnection()
    {
        if (isset($_POST)) {
            $email = $_POST['email'];
            $pwd = $_POST['password'];

            $result = $this->user->logIn($email, $pwd);
            if ($result) {
                session_set_cookie_params([
                    'SameSite' => 'None',
                    'secure' => true
                ]);
                session_start();
                global $_SESSION;
                $_SESSION['user_id'] = $result['id'];
                $allProperties = $this->property->getAllPropertyOfOneAdmin($_SESSION['user_id']);

                for ($i = 0; $i < count($allProperties); $i++) {
                    $allProperties[$i]["homeType"] = $this->property->getPropertyType($allProperties[$i]["id"]);
                    // var_dump($allProperties[$i]);
                }

                $allHouses = $this->house->getOneHouse($_SESSION['user_id']);
                $allRental = $this->rental->getAllPropertyToRent($_SESSION['user_id']);
                $oneTransaction = $this->transaction->getOneTransaction($_SESSION['user_id']);
                $getTransaction = $this->propertyCtrl->getTransaction();
                $view = new View("Dashboard");
                $view->generer(array('allProperties' => $allProperties, 'allHouses' => $allHouses, 'allRental' => $allRental, 'oneTransaction' => $oneTransaction, 'getTransaction' => $getTransaction));
            } else {
                echo "email ou mpd invalide";
            }
        }
    }
}
