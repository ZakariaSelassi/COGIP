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
        if(isset($_POST['submit']))
        {
            $name = $_POST['invoice'];
            $date = $_POST['date'];
            $date = date('Y-m-d');
            $compa = $_POST['companies'];
            $peop = $_POST['people'];
            $bd = $this->connect();
  

            $sql = "INSERT INTO invoices (num_invoices,date_invoices,id_compagnies,id_people) values (:num_invoices,:date_invoices,:id_compagnies,:id_people)";
            $stmt = $bd->prepare($sql);

            $stmt -> bindParam(":num_invoices",$num_invoices);
            $stmt -> bindParam(":date_invoices",$date_invoices);
            $stmt -> bindParam(":id_compagnies",$compa);
            $stmt -> bindParam(":id_people",$peop);
          
            if(!$stmt)
            { 
                echo 'error';
            }else
            {   
                $stmt->execute([
                    'num_invoices' => $name,
                    'date_invoices' => $date,
                    'id_compagnies' => $compa,
                    'id_people' => $peop
                ]);
                var_dump($stmt);
                echo $stmt -> rowCount();
                echo "New clients as been register !";}
            return  $stmt->fetchAll();
        
          
        }
           
    }
}
          /*$company = "SELECT compagnies.name_company FROM invoices inner join compagnies on invoices.id_compagnies = compagnies.id_compagnies inner join type_company on compagnies.id_type_company = type_company.id_type_company";
            $people = "SELECT people.first_name from invoices inner join people on invoices.id_people = people.id_people"; */