<?php

namespace Loïc\COGIP\model;
require_once("model/database.php");

class Contact extends Database{


    public function listContact()
    {
        $bd = $this->connect();
        $req = $bd->query('SELECT id, CONCAT(first_name, " ",last_name) AS "Name", telephone, email, company  FROM People');
        return $req;
    }
}