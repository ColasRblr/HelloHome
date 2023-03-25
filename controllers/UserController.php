<?php
// require __DIR__ . '/../models/User.php';
require_once './views/View.php';
require_once './models/User.php';
require_once './models/Property.php';
require_once './models/Sale.php';
require_once './models/Rental.php';

if (isset($_GET['action']) && $_GET['action'] == 'updateUser') {
    $userController = new UserController();
    $userController->updateAdminInfo();
}
if (isset($_GET['action']) && $_GET['action'] == 'updatePassword') {
    $userController = new UserController();
    $userController->updatePassword();
}

class UserController
{
    private $property;
    private $user;
    private $ctrlAccueil;
    private $house;
    private $rental;
    private $transaction;
    private $propertyCtrl;
    private $sale;
    private $apartment;


    public function __construct()
    {
        $this->user = new User();
        $this->property = new Property();
        $this->house = new House();
        $this->rental = new Rental();
        $this->transaction = new Transaction();
        $this->propertyCtrl = new PropertyController();
        $this->sale = new Sale();
        $this->apartment = new Apartment();
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
                $this->displayDashboard();
            } else {
                echo "email ou mpd invalide";
            }
        }
    }

    public function displayDashboard()
    {
        try {
            if (!isset($_SESSION)) {
                session_start();
            }
            $allProperties = $this->property->getAllPropertyOfOneAdmin($_SESSION['user_id']);
            $status = [];
            $type = [];
            for ($i = 0; $i < count($allProperties); $i++) {
                if ($this->sale->getAllPropertyToSale($allProperties[$i]['id'])) {
                    $status[$i] = "à vendre";
                } else if ($this->rental->getAllPropertyToRent($allProperties[$i]['id'])) {
                    $status[$i] = "à louer";
                }
            }
            for ($i = 0; $i < count($allProperties); $i++) {
                if ($this->house->getAllHousesByUser($allProperties[$i]['id'])) {
                    $type[$i] = "maison";
                } else if ($this->apartment->getAllApartmentsByUser($allProperties[$i]['id'])) {
                    $type[$i] = "appartement";
                }
            }
            $view = new View("Dashboard");
            $view->generer(array('allProperties' => $allProperties, 'type' => $type, 'status' => $status));
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function updateAdminInfo()
    {
        $json_data = file_get_contents('php://input');
        $data = json_decode($json_data, true);
        session_start();
        if (isset($data['info'])) {
            $firstname = $data['info'][0];
            $lastname = $data['info'][1];
            $email = $data['info'][2];
            try {
                $this->user->updateAdminInfo($firstname, $lastname, $email, $_SESSION['user_id']);
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        }
    }

    // public function displayNumberPropertyToSaleStatistique()
    // {
    //     $properties = "hello";
    //     $view = new View("Dashboard");
    //     $view->generer(array('properties' => $properties));
    // }
    public function deconnection()
    {
        if (isset($_SESSION)) {
            session_destroy();
        }
        try {
            $allProperties = "hello";
            $view = new View("Connection");
            $view->generer(array('allProperties' => $allProperties));
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function getProfilAdmin()
    {
        session_start();
        try {
            $allProperties = $this->user->getAdminInfo($_SESSION['user_id']);
            $view = new View("AdminProfil");
            $view->generer(array('allProperties' => $allProperties));
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function updatePassword()
    {
        $json_data = file_get_contents('php://input');
        $data = json_decode($json_data, true);
        session_start();
        if (isset($data['info'])) {
            $oldpassword = $data['info'][0];
            $newpassword = $data['info'][1];
            $idAdmin = $_SESSION['user_id'];
            try {
                // echo password_hash("1122aaAA", PASSWORD_DEFAULT);
                $adminInfo = $this->user->getAdminInfo($idAdmin);
                if (isset($adminInfo)) {
                    if (password_verify($oldpassword, $adminInfo['pwd'])) {
                        $this->user->changePassword($newpassword, $idAdmin);
                    } else {
                        echo "Le mot de passe ne correspond pas";
                    }
                }
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        }
    }
}
