<?php

require_once 'models/ConnectionModel.php';

class Transaction extends Connection
{
    private $attribute;

    public function __construct($attribute)
    {
        $this->attribute = $attribute;
    }
}
