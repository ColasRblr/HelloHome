<?php

require __DIR__ . '/../vendor/autoload.php';

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(dirname(dirname(__DIR__)) . '/POO_Immo');
$dotenv->load();
// $dotenv = Dotenv::createImmutable(__DIR__ . '/../');
// $dotenv->load();

class Connection
{
    private $bdd;

    public function executerRequete($sql, $params = null)
    {
        if ($params == null) {
            $resultat = $this->getBdd()->query($sql);
        } else {
            $resultat = $this->getBdd()->prepare($sql);
            $resultat->execute(array($params));
        }
        return $resultat;
    }

    public function getBdd()
    {

        if ($this->bdd == null) {
            $this->bdd = new PDO(
                $_ENV['DATABASE_URL'] . '; dbname=' . $_ENV['DB_NAME'] . '; charset=utf8',
                $_ENV['PASSWORD'],
                $_ENV['USER'],

                // 'mysql:host=localhost;dbname=poo_immo;charset=utf8',
                // 'root',
                // 'root',

                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
            );
            // echo "connexion réusssi !";
        }

        return $this->bdd;
    }
}
