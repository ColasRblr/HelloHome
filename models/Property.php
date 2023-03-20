<?php

require_once 'models/Connection.php';

class Property extends Connection
{
    private $attribute;

    public function __construct($attribute)
    {
        $this->attribute = $attribute;
    }

    public function getAllProperty()
    {
        $sql = "SELECT * FROM property;";
        $this->executerRequete($sql);
    }
}
