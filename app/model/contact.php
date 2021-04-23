<?php
namespace App\model;

use PDO;
require_once("class/database.php");
class Contact extends Database{


    public function listContact()
    {
        $bd = $this->connect();
        $req = $bd->query('SELECT id_people, CONCAT(first_name, " ",last_name) AS "Name", telephone, email, compagnies.name_company, compagnies.id_compagnies FROM People INNER JOIN compagnies on people.id_compagnies = compagnies.id_compagnies');
        return $req;
    }


    public function listContactDetails(){
        $bd = $this->connect();
        $req = $bd->query('SELECT num_invoices, date_invoices FROM invoices INNER JOIN people on invoices.id_people = people.id_people');
        return $req;
    }

    public function create(){
        if(isset($_POST['submit']))
        {
            $first_name = $_POST['firstName'];
            $last_name= $_POST['lastName'];
            $telephone = $_POST['telephone'];
            $email = $_POST['email'];
            $company = $_POST['company'];
            $bd = $this->connect();
            $sql = "INSERT INTO people (first_name,last_name,email,telephone,id_compagnies) values (:first_name,:last_name,:email,:telehpone,:id_compagnies)";
            $stmt = $bd->prepare($sql);
            $stmt -> bindParam(":first_name",$first_name);
            $stmt -> bindParam(":last_name",$last_name);
            $stmt -> bindParam(":telephone",$telephone);
            $stmt -> bindParam(":email",$email);
            $stmt -> bindParam(":id_compagnies",$company);
          
            if(!$stmt)
            { 
                echo 'error';
            }else
            {   
                $stmt->execute([
                    'first_name' => $first_name,
                    'last_name' => $last_name,
                    'telephone' => $telephone,
                    'email' => $email,
                    'id_compagnies' => $company
                ]);
                
                echo $stmt -> rowCount();
                echo "New clients as been register !";
            }
                return  $stmt;  
        }
           
    }
}


