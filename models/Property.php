<?php

require_once 'models/Connection.php';

class Property extends Connection
{
    public function getAllProperty()
    {
        $sql = "SELECT * FROM property;";
        $this->executerRequete($sql);
    }
}
