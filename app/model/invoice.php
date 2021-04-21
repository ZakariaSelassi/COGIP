<?php
namespace App\model;

//require_once("model/database.php");

class Invoice extends Database{


    public function listInvoice()
    {
        $bd = $this->connect();
        $req = $bd->query('SELECT num_invoices,date_invoices,compagnies.name_company,type_company.type FROM invoices inner join compagnies on invoices.id_compagnies = compagnies.id_compagnies inner join type_company on compagnies.id_type_company = type_company.id_type_company');
        return $req;
    }
    public function createInvoices(){
            $bd = $this->connect();
            $sql = "INSERT INTO invoices (num_invoices,date_invoices) values (:num_invoices,:date_invoices)";
            $stmt = $bd->prepare($sql);
            $num_invoices = $_POST['invoice'];
            $date_invoices = $_POST['date'];
            $stmt -> bindParam(":num_invoices",$num_invoices);
            $stmt -> bindParam(":date_invoices",$date_invoices);
            $data = $stmt->execute([
                'num_invoices' => $_POST['invoice'],
                'date_invoices' => $_POST['date']
                ]);
            if(!$data)
            { 
                echo 'error';
            }else
            {   echo $stmt -> rowCount();
                echo "New clients as been register !";}
            return $stmt;
    }
}