<?php
namespace App\model;

use PDO;

use App\model\classe\Database;
class Contact extends Database{


    public function listContact()
    {
        $bd = $this->connect();
        $req = $bd->query('SELECT id_people, CONCAT(first_name, " ",last_name) AS "Name", telephone, email, compagnies.name_company, compagnies.id_compagnies FROM People INNER JOIN compagnies on people.id_compagnies = compagnies.id_compagnies');
        return $req;
    }

    public function listContactDetail(int $id)
    {
        $bd = $this->connect();
        $req = $bd->query("SELECT id_people, CONCAT(first_name,' ',last_name) AS 'Name', telephone, email, compagnies.name_company, compagnies.id_compagnies FROM People INNER JOIN compagnies on people.id_compagnies = compagnies.id_compagnies WHERE id_people = $id " );
        return $req;
    }

    public function listContactDetailEdit(int $id)
    {
        $bd = $this->connect();
        $req = $bd->query("SELECT id_people,first_name,last_name, telephone, email, compagnies.name_company, compagnies.id_compagnies FROM People INNER JOIN compagnies on people.id_compagnies = compagnies.id_compagnies WHERE id_people = $id " );
        return $req;
    }


    public function listContactDetailInvoices(int $id){
        $bd = $this->connect();
        $req =$bd->query("SELECT num_invoices, date_invoices FROM invoices WHERE id_people = $id");
        return $req;
    }

    public function deleteContact(){
        $bdd = $this->connect();
        $requete = "DELETE FROM `people` WHERE id_people = :id";
        $resultat = $bdd->prepare($requete);
        $resultat->bindParam(':id',$id, PDO::PARAM_INT);
        return $resultat->execute();
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

    public function editContact(int $id){
        if(isset($_POST['submit'])){
            $bd = $this->connect();
            $first_name = $_POST['firstName'];
            $last_name= $_POST['lastName'];
            $telephone = $_POST['telephone'];
            $email = $_POST['email'];
            $company = $_POST['company'];
            $sql = "UPDATE people SET 'first_name' = :first_name, 'last_name' = :last_name, 'telephone' = :telephone, 'email' = :email, company = :company WHERE id_people = $id";
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


