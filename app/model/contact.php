<?php


require_once("object/database.php");

class Contact extends Database{


    public function listContact()
    {
        $bd = $this->connect();
        $req = $bd->query('SELECT id_people, CONCAT(first_name, " ",last_name) AS "Name", telephone, email, compagnies.name_company FROM People INNER JOIN compagnies on people.id_compagnies = compagnies.id_compagnies');
        return $req;
    }
}