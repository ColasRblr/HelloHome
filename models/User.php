<?php

require_once 'Connection.php';

class User extends Connection
{
    public function isEmailUnique($email)
    {
        $sql = "SELECT COUNT(*) FROM user WHERE email = ?";
        $this->executerRequete($sql, array([$email]));
    }

    public function logIn($email, $password)
    {
        $sql = "SELECT * FROM user WHERE email = ?";
        $stmt = $this->executerRequete($sql, array($email));
        $user = $stmt->fetch();
        if ($user) {
            if (password_verify($password, $user['pwd'])) {
                return $user;
            }
        }
    }

    public function addClient($firstname, $lastname, $email, $pwd, $isAdmin)
    {
        $isValidEmail = $this->isEmailUnique($email);

        if ($isValidEmail) {
            $sql = "INSERT INTO user (firstname, lastname, email, pwd, isAdmin) VALUES (?, ?, ?, ?, ?)";
            $this->executerRequete($sql, array($firstname, $lastname, $email, $pwd, $isAdmin));
        }
    }

    public function updateClient($id, $firstname, $lastname, $email, $pwd)
    {
        $sql = "UPDATE clients 
        SET firstname=?, lastname=?, email=?, pwd=? 
        WHERE id=?";
        $this->executerRequete($sql, array($firstname, $lastname, $email, $pwd, $id));
    }

    public function getClientInfo($id)
    {
        $sql = "SELECT * FROM clients 
        WHERE id=?";
        $userInfo = $this->executerRequete($sql, array($id));
        return $userInfo;
    }
}
