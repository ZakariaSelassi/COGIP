<?php
namespace App\model;

use PDO;

use App\model\classe\Database;
class Companies extends Database{


    public function allCompanies(){
        $bd = $this->connect();
        $req = $bd->query('SELECT id_compagnies,name_company,country_company,vat_company,type_company.type FROM compagnies inner join type_company on compagnies.id_type_company = type_company.id_type_company');
        return $req;
    }
    public function typeCompany(){
        $bd = $this->connect();
        $req = $bd->query('SELECT * from type_company');
        return $req;
    }
    public function createCompanies(){
        if(isset($_POST['submit']))
        {
            $name = $_POST['name'];
            $tva = $_POST['tva'];
            $country = $_POST['country'];
            $companiesType = $_POST['type'];
            $bd = $this->connect();
            $sql = "INSERT INTO compagnies (name_company,country_company,vat_company,id_type_company) values (:name_company,:country_company,:vat_company,:id_type_company)";
            $stmt = $bd->prepare($sql);
            $stmt -> bindParam(":name_company",$name);
            $stmt -> bindParam(":country_company",$country);
            $stmt -> bindParam(":vat_company",$tva);
            $stmt -> bindParam(":id_type_company",$companiesType);
          
            if(!$stmt)
            { 
                echo 'error';
            }else
            {   
                $stmt->execute([
                    'name_company' => $name,
                    'country_company' => $country,
                    'vat_company' => $tva,
                    'id_type_company' => $companiesType
                ]);
                
                echo $stmt -> rowCount();
                echo "New company as been register !";}
                return  $stmt;  
        }
           
    }

    public function deleteInvoices(int $id){
        $bdd = $this->connect();
        $requete = "DELETE FROM `compagnies` WHERE id_compagnies = $id";
        $resultat = $bdd->prepare($requete);
        return $resultat->execute();
    }
}