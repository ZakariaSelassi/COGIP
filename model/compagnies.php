<?php

namespace Nadja\COGIP\model;
require_once("object/database.php");

class Compagnies extends Database{


    public function listClients()
    {
        $bd = $this->connect();
        $req = $bd->query('SELECT name_company, country_company, vat_company FROM compagnies WHERE id_type_company = 1 ORDER BY name_company ASC');
        return $req;
    }

    public function listSuppliers()
    {
        $bd = $this->connect();
        $req = $bd->query('SELECT name_company, country_company, vat_company FROM compagnies WHERE id_type_company = 2 ORDER BY name_company ASC');
        return $req;
    }

    // public function listAll()
    // {
    //     $bd = $this->connect();
    //     $req = $bd->query('SELECT name_company, country_company, vat_company FROM Compagnies');
    //     return $req;
    // }

    // public function Affichage () 
    // {
    //     $bd = $this->connect();
    //     $req = $bd->query('SELECT type_company FROM ')

}