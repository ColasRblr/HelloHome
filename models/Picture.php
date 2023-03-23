<?php

require_once 'models/Connection.php';

class Picture extends Connection
{

    public function __construct()
    {
    }

    public function addPicture($id_property, $picture_description, $picture_url)
    {
        $sql = "INSERT INTO picture (id_property, picture_description, picture_url) VALUES (?, ?, ?);";
        $this->executerRequete($sql, array($id_property, $picture_description, $picture_url));
    }
}
