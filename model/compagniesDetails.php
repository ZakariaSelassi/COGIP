
<?php

namespace Nadja\COGIP\model;
require_once("object/database.php");

class Compagnies extends Database{


    public function CompagniesToTypeCompagnies()
    {
        $bd = $this->connect();
        $req = $bd->query('SELECT c.company_name, c.company_tva, t.type_name FROM company c INNER JOIN typeofcompany t ON c.type_id = t.type_id');
        return $req;
    }

    public function PeopleToCompagnies()
    {
        $bd = $this->connect();
        $req = $bd->query('SELECT ');
        return $req;
    }
    public function InvoiceToPeople()
    {
        $bd = $this->connect();
        $req = $bd->query('SELECT ');
        return $req;
    }



}



?>

