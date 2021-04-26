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
            $company =(int)$_POST['companies'];
            var_dump($company);
            $bd = $this->connect();
            $sql = "INSERT INTO people (first_name,last_name,email,telephone,id_compagnies) values (?,?,?,?,?)";
            $stmt = $bd->prepare($sql);
            $stmt->bindValue(1, $first_name);
            $stmt->bindValue(2, $last_name);
            $stmt->bindValue(3, $email);
            $stmt->bindValue(4, $telephone);
            $stmt->bindValue(5, $company);
            /*$stmt -> bindParam(":first_name",$first_name);
            $stmt -> bindParam(":last_name",$last_name);
            $stmt -> bindParam(":email",$email);
            $stmt -> bindParam(":telephone",$telephone);
            $stmt -> bindParam(":id_compagnies",$company);*/
          
            if(!$stmt)
            { 
                echo 'error';
            }else
            {   
                /*$stmt->execute([
                    'first_name' => $first_name,
                    'last_name' => $last_name,
                    'telephone' => $telephone,
                    'email' => $email,
                    'id_compagnies' => $company
                ]);*/

                $stmt->execute();
                
                echo $stmt -> rowCount();
                echo "New clients as been register !";
            }
                return  $stmt;  
        }
           
    }


    public function editContact(){
        if(isset($_POST['submit'])){
            $bd = $this->connect();
            $first_name = $_POST['firstName'];
            $last_name= $_POST['lastName'];
            $telephone = $_POST['telephone'];
            $email = $_POST['email'];
            $company = $_POST['company'];
            $id = $_POST['id'];
            $sql = "UPDATE people SET 'first_name' = :first_name, 'last_name' = :last_name, 'telephone' = :telephone, 'email' = :email, company = :company WHERE 'id_people' = :id";
            $stmt = $bd->prepare($sql);
            $stmt -> bindParam(":first_name",$first_name);
            $stmt -> bindParam(":last_name",$last_name);
            $stmt -> bindParam(":telephone",$telephone);
            $stmt -> bindParam(":email",$email);
            $stmt -> bindParam(":id_compagnies",$company);
            $stmt -> bindParam(":id",$id);
            
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
                    'id_compagnies' => $company,
                    'id' => $id
                ]);
                
                echo $stmt -> rowCount();
                echo "New clients as been register !";
            }
                return  $stmt;  
        }
       
    }

    public function listContactHome()
    {
        $bd = $this->connect();
        $req = $bd->query('SELECT id_people, CONCAT(first_name, " ",last_name) AS "Name", telephone, email, compagnies.name_company, compagnies.id_compagnies FROM People INNER JOIN compagnies on people.id_compagnies = compagnies.id_compagnies ORDER BY id_people DESC LIMIT 5');
        return $req;
    }




}


