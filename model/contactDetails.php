<?php


require_once("object/database.php");

class ContactDetails extends Database{


    public function listContactDetails()
    {
        $bd = $this->connect();
        $req = $bd->query('SELECT people.id_people, CONCAT(first_name, " ",last_name) AS "Name", telephone, email, compagnies.name_company, invoices.num_invoices, invoices.date 
        FROM people 
        INNER JOIN compagnies on people.id_compagnies = compagnies.id_compagnies
        INNER JOIN invoices on people.id_compagnies = invoices.id_compagnies
        WHERE people.id_people = ::id');
        $req2 = $bd->query('SELECT num_invoices, date_invoices
        FROM invoices 
        INNER JOIN people on invoices.id_people = people.id_people
        WHERE id_people = ::id');
        return $allReq=array($req,$req2);
    }
}