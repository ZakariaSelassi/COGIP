<?php

namespace Nadja\COGIP\model;
require_once("model/database.php");

class Compagnies extends Database{


    public function listClients()
    {
        $bd = $this->connect();
        $req = $bd->query('SELECT name_company, coutry_company, vat_company FROM Compagnies INNER JOIN type_company ON compagnies.id_type_company = type_company.id_type_company WHERE type_company = "clients" ORDER BY ASC');
        return $req;
    }

    public function listSuppliers()
    {
        $bd = $this->connect();
        $req = $bd->query('SELECT name_company, coutry_company, vat_company FROM Compagnies INNER JOIN type_company ON compagnies.id_type_company = type_company.id_type_company WHERE type_company = "suppliers" ORDER BY ASC');
        return $req;
    }

    // public function listAll()
    // {
    //     $bd = $this->connect();
    //     $req = $bd->query('SELECT name_company, country_company, vat_company FROM Compagnies');
    //     return $req;
    // }

}