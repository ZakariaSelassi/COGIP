<?php
namespace model;

//require_once("model/database.php");

class Invoice extends Database{


    public function listInvoice()
    {
        $bd = $this->connect();
        $req = $bd->query('SELECT num_invoices,date_invoices,compagnies.name_company,type_company.type FROM invoices inner join compagnies on invoices.id_compagnies = compagnies.id_compagnies inner join type_company on compagnies.id_type_company = type_company.id_type_company');
        return $req;
    }
    public function createInvoices($num_invoices,$date_invoice){
            $bd = $this->connect();
            $sql = "INSERT INTO invoices (num_invoices,date_invoices) values (:num_invoices,:date_invoices)";
            $stmt = $bd->prepare($sql);
            $stmt -> bindParam(":num_invoices",$num_invoices);
            $stmt -> bindParam(":date_invoice",$date_invoice);
            $req = $stmt->execute();
        return $req;
    }
}