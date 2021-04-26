<?php

namespace App\controllers;
use App\model\Companies;

class CompaniesController extends Controller
{
    public function allCompanies()
    {
        $companies= new Companies();
        $req = $companies->allCompanies();
        return $this->view('Companies.companies',compact('req'));
    }
    public function creatCompanies()
    {
        $create = new Companies();
        $req  = $create->createCompanies();
        $req2 = $create->typeCompany();
        return $this->view('Companies.formCompanies', compact('req','req2'));
    }
    public function sendSubmit()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $display = new Companies();
            $req = $display->createCompanies($_POST);
            if ($req) {
                header('Location: /home/admin');
            } else {
                echo "Pas bon";
            }
        }
    }

    public function deleteCompany($id)
    {
        $delete = new Companies();
        $delete->deleteCompany($id);
        return header('Location: /home/company');
    }


}
    
