<?php
// require __DIR__ . '/../models/User.php';
require_once './views/View.php';
require_once './models/User.php';

class UserController
{
    private $property;
    private $user;
    private $ctrlAccueil;

    public function __construct()
    {
        // $this->property = new Property();
        $this->user = new User();
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

                var_dump($result);

                $view = new View("Dashboard");
                $view->generer(array('adminInfos' => $result));
            } else {
                echo "email ou mpd invalide";
            }
        }
    }
}
