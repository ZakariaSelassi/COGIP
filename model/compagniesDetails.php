//jointure de la facture 
//jointure compagnies à type_compagnires
//jointure people à compagnies
//jointure invoices à people


<?php

namespace Nadja\COGIP\model;
require_once("object/database.php");

class Compagnies extends Database{


    public function CompagniesToTypeCompagnies()
    {
        $bd = $this->connect();
        $req = $bd->query('SELECT CONCAT(first_name," ", last_name) AS "name", telephone, email FROM people JOIN compagnies ON people.id_compagnies = compagnies.id_compagnies WHERE people.id_compagnies = 1');
        return $req;
    }

    public function PeopleToCompagnies()
    {
        $bd = $this->connect();
        $req = $bd->query('SELECT CONCAT(');
        return $req;
    }
    public function InvoiceToPeople()
    {
        $bd = $this->connect();
        $req = $bd->query('SELECT num_invoices, date_invoices AS "invoice number" FROM invoices JOIN people ON invoices.id_compagnies = people.id_compagnies WHERE invoices.id_compagnies = 1');
        return $req;
    }



}



?>

