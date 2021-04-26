<?php
namespace App\model;

use PDO;

use App\model\classe\Database;
class Invoice extends Database{

    public function lastCompanies()
    {
        $bd = $this->connect();
        $req = $bd->query('SELECT id_compagnies,name_company,country_company,vat_company,type_company.type FROM compagnies inner join type_company on compagnies.id_type_company = type_company.id_type_company LIMIT 0,5');
        return $req;
    }
    public function companyNames(){
        $bd = $this->connect();
        $req = $bd->prepare('SELECT id_compagnies,name_company,country_company,vat_company,type_company.type FROM compagnies inner join type_company on compagnies.id_type_company = type_company.id_type_company LIMIT 0,5');
        $req->execute();
        $resultat = $req->fetchAll();
        return $resultat;
    }
    public function peopleNames(){
        $bd = $this->connect();
        $req = $bd->prepare('SELECT id_people,first_name,email,telephone from people');
        $req->execute();
        $resultat = $req->fetchAll();
        return $resultat;
    }
    public function lastContact()
    {
        $bd = $this->connect();
        $req = $bd->prepare('SELECT id_people, CONCAT(first_name, " ",last_name) AS "Name", telephone, email, compagnies.name_company, compagnies.id_compagnies FROM People INNER JOIN compagnies on people.id_compagnies = compagnies.id_compagnies LIMIT 0,5');
        $req->execute();
        $resultat = $req->fetchAll();
        return $resultat;
    }

    public function lastInvoice()
    {
        $bd = $this->connect();
        $req = $bd->query('SELECT id_invoices,num_invoices,date_invoices,compagnies.name_company,type_company.type FROM invoices inner join compagnies on invoices.id_compagnies = compagnies.id_compagnies inner join type_company on compagnies.id_type_company = type_company.id_type_company LIMIT 0,5');
        return $req;
    }
    public function allInvoice(){
        $bd = $this->connect();
        $req = $bd->query('SELECT id_invoices,num_invoices,date_invoices,compagnies.name_company,type_company.type FROM invoices inner join compagnies on invoices.id_compagnies = compagnies.id_compagnies inner join type_company on compagnies.id_type_company = type_company.id_type_company');
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
                
                echo $stmt -> rowCount();
                echo "New invoices as been register !";}
                return  $stmt;  
        }   
    }

    public function deleteInvoices(int $id){
        $bdd = $this->connect();
        $requete = "DELETE FROM `invoices` WHERE id_invoices = $id";
        $resultat = $bdd->prepare($requete);
        return $resultat->execute();
    }
}