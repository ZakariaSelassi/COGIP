<?php
namespace Zakaria\COGIP\model;

require_once("model/database.php");

class Invoice extends Database{


    public function listInvoice()
    {
        $bd = $this->connect();
        $req = $bd->query('SELECT id, titre, contenu  FROM billets LIMIT 0, 5');
        return $req;
    }
}